document.addEventListener('DOMContentLoaded', function() {
    const searchInput = document.querySelector('input[name="search"]');
    const tableBody = document.querySelector('tbody');
    const pagination = document.querySelector('.pagination');
    const resultsInfo = document.querySelector('.results-info');

    function debounce(func, timeout = 300) {
        let timer;
        return (...args) => {
            clearTimeout(timer);
            timer = setTimeout(() => { func.apply(this, args); }, timeout);
        };
    }

    async function handleSearch(searchTerm) {
        try {
            const response = await fetch(`/admin/clients/search?search=${encodeURIComponent(searchTerm)}`);
            const { html, paginationHtml, resultsInfoHtml } = await response.json();
            
            tableBody.innerHTML = html;
            if(pagination) pagination.innerHTML = paginationHtml;
            if(resultsInfo) resultsInfo.innerHTML = resultsInfoHtml;
        } catch (error) {
            console.error('Search failed:', error);
        }
    }

    searchInput.addEventListener('input', debounce((e) => {
        handleSearch(e.target.value);
    }));
}); 