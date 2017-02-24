/* Load page */

$(document).ready(function() {
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.open("GET", 'ResponseRequest.php', true);
    xmlhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            $(".container #content").html(this.responseText);
        }
    };
    xmlhttp.send();
});

/* Delete Category */

$("body").on("click",".glyphicon-remove", function(e){
    e.preventDefault();
    if (confirm("Are you sure delete?")) {
        var title = $(this).attr("value");
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.open("GET", 'ResponseRequest.php?type=delete&title='+title, true);
        xmlhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            $(document).load('index.php');
         }
        };
    xmlhttp.send();
    }
    return false;
});

/* Add New */

$(".add-new").on("click", function(){
    var title = $("#title").val();
    var content = $("#content").val();
    var author = $("#author").val();
    var category_id = $("#category").val();
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.open("GET", 'ResponseRequest.php?type=add&title='+title+'&content='+content+'&author='+author+'&cate_id='+category_id, true);
    xmlhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
        $("#myModal").modal("hide");
        $("body .container #content").html(this.responseHTML);
        $("#content").load('index.php');
     }
    };
    xmlhttp.send();
});

/* Search */

function search(){
    var value = $('#search').val();
    var rows = $("body #Math1").rows;
    for(i=1;i<rows.length; i++){
        for(j=0; j<rows[i].cells.length; j++){
            if(rows[i].cells[j].innerHTML.toLowerCase().search(value)!=-1){
                rows[i].style.display="";
                break;
            }
            else rows[i].style.display="none";
        }
    }
}

