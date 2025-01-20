$(document).ready(function () {
    $(".track-button").click(function () {
        var trackingId = $(this).data("tracking-id");

        // Fetch data from the server using AJAX
        $.ajax({
            url: "/trackings/" + trackingId, // Adjust the URL as per your route setup
            type: "GET",
            success: function (response) {
                // Populate the modal with the fetched data
                $("#modal-title").text(
                    "Tracking Information for: " +
                        response.tracking.tracking_number
                );

                // Tracking Details
                var tracking = response.tracking;
                $("#tracking-number").text(tracking.tracking_number);

                var is_delayed = parseInt(response.tracking.is_delayed, 10);
                // console.log('is_delayed Value:', is_delayed);

                // Conditional rendering for package_status
                function renderPackageStatus(status) {
                    var span = $(
                        '<span class="badge py-4px px-2 fs-9px d-inline-flex align-items-center"><i class="fa fa-circle opacity-5 fs-4px fa-fw me-2"></i> ' +
                            status.toUpperCase() +
                            "</span>"
                    );
                    if (status === "pending") {
                        span.addClass("bg-yellow bg-opacity-15 text-yellow");
                    } else if (status === "delivered") {
                        span.addClass("bg-primary bg-opacity-15 text-primary");
                    } else if (status === "in_transit") {
                        span.addClass(
                            "bg-white bg-opacity-15 text-white text-opacity-75"
                        );
                    }
                    return span;
                }

                $("#package-status").html(
                    renderPackageStatus(tracking.package_status)
                );

                // Shipping Method
                $("#shipping-method").text(tracking.shipping_method);

                function formatDate(dateString) {
                    if (dateString) {
                        var date = new Date(dateString);
                        return date.toISOString().split('T')[0]; // YYYY-MM-DD format
                    }
                    return '';
                }

                $('#ship-date').text(formatDate(tracking.ship_date));
                $('#delivery-date').text(formatDate(tracking.delivery_date));

                // Carrier Name and Cost
                $("#carrier-name").text(tracking.carrier_name);
                $("#shipping-cost").text(tracking.shipping_cost);

                 // Conditional rendering for is_delayed
                function renderIsDelayed(value) {
                    // Log the value to the console for debugging
                    var is_delayed = parseInt(response.tracking.is_delayed, 10);

                    var span = $('<span class="badge py-4px px-2 fs-9px d-inline-flex align-items-center"><i class="fa fa-circle opacity-5 fs-4px fa-fw me-2"></i> ' + (is_delayed === 1 ? 'Yes' : 'No') + '</span>');
                    
                    // console.log('is_delayed Value:', is_delayed);

                    if (is_delayed === 1) {
                        span.addClass('bg-success bg-opacity-15 text-success');
                    } else {
                        span.addClass('bg-danger bg-opacity-15 text-danger');
                    }
                    return span;
                }

                $('#is-delayed').html(renderIsDelayed(parseInt(response.is_delayed, 10)));

                // Conditional rendering for is_returned
                function renderIsReturned(isReturned) {
                    var is_returned = parseInt(response.tracking.is_returned, 10);

                    // console.log('is_returned Value:', response.tracking.is_returned);

                    var span = $('<span class="badge py-4px px-2 fs-9px d-inline-flex align-items-center"><i class="fa fa-circle opacity-5 fs-4px fa-fw me-2"></i> ' + (is_returned === 1 ? 'Yes' : 'No') + '</span>');
                    if (is_returned === 1) {
                        span.addClass('bg-success bg-opacity-15 text-success');
                    } else {
                        span.addClass('bg-danger bg-opacity-15 text-danger');
                    }
                    return span;
                }

                $('#is-returned').html(renderIsReturned(parseInt(response.is_returned, 10)));

                // Conditional rendering for is_insured
                function renderIsInsured(isInsured) {
                    var is_insured = parseInt(response.tracking.is_insured, 10);

                    // console.log('is_insured Value:', response.tracking.is_insured);

                    var span = $('<span class="badge py-4px px-2 fs-9px d-inline-flex align-items-center"><i class="fa fa-circle opacity-5 fs-4px fa-fw me-2"></i> ' + (is_insured === 1 ? 'Yes' : 'No') + '</span>');
                    if (is_insured === 1) {
                        span.addClass('bg-success bg-opacity-15 text-success');
                    } else {
                        span.addClass('bg-danger bg-opacity-15 text-danger');
                    }
                    return span;
                }

                $('#is-insured').html(renderIsInsured(parseInt(response.is_insured, 10)));

                // Format dates
                function formatDate(dateString) {
                    if (dateString) {
                        var date = new Date(dateString);
                        return date.toISOString().split('T')[0]; // YYYY-MM-DD format
                    }
                    return '';
                }

                // Format dates
                function formatDate(dateString) {
                    if (dateString) {
                        var date = new Date(dateString);
                        return date.toISOString().split('T')[0]; // YYYY-MM-DD format
                    }
                    return '';
                }

                // Address Details
                var address = response.address;
                $("#address").text(address.address);
                $("#city").text(address.city);
                $("#state").text(address.state);
                $("#zipCode").text(address.zipCode);
                $("#country").text(address.country);

                // Package Details
                var packages = response.packages;
                $("#package-name").text(packages.package_name);
                $("#description").text(packages.description);
                $("#weight").text(packages.weight);
                $("#amount").text(packages.amount);

                // Show the modal
                $("#modalXl").modal("show");
            },
            error: function (xhr, status, error) {
                console.error("Error fetching tracking data:", error);
            },
        });
    });
});
