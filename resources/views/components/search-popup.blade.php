<div class="search-popup">
    <!-- Search form content -->
    @isset($searchAction)
    <form action="{{ $searchAction }}" method="GET">
        <input type="text" name="query" placeholder="Search...">
        <button type="submit"><i class="fa fa-search"></i></button>
    </form>
    @endisset
</div> 