$("document").ready(function(){
    getStats();
});

function getStats()
{
    var action = "loadIndexStatsTop";
    $.ajax({
        url: "includes/data_operation.php",
        method: "POST",
        data: {
            action: action
        },
        dataType: "json",
        success: function(data) {
            console.log(data);
            $(".totalSales").each(function(){
                $(this).html("Rs. "+data[0].sales);
            });
            $(".totalProducts").html(data[0].total_products);
            $(".totalCustomers").html(data[0].total_customers);
            $(".totalProfit").html("Rs. "+data[0].profit);
        },
        error: function(xhr, ajaxOptions, thrownError) {
            alert(xhr.status);
            alert(thrownError);
        }
    });
}