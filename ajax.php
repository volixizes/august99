<script>
    //to show existing data from the db table
    $(document).ready(function(){
        $.ajax({
            url: "show.php", //file sql
            type: "POST",
            cache: false,
            success: function(data){
                $('#table').html(data);
            },
        });

        //saving new entry
        $('#add_save').on('click', function(){

            var add_title = $('#add_title').val();
            var add_isbn = $('#add_isbn').val();
            var add_author = $('#add_author').val();
            var add_pub = $('#add_pub').val();
            var add_year = $('#add_year').val();
            var add_category = $('#add_category').val();

            if (add_title != "" && add_isbn != "" && add_author != "" && add_pub != "" && add_year != "" && add_category != "" ){

                $.ajax({
                url: "add.php", //file sql
                type: "POST",
                cache: false,
                data: {
                    add_title : add_title,
                    add_isbn : add_isbn,
                    add_author : add_author,
                    add_pub : add_pub,
                    add_year : add_year,
                    add_category : add_category
                },
                success: function(dataResult){
                    var data = JSON.parse(dataResult);
                    if(data.statusCode == 200){
                        alert("Book added succesfully!");
                        location.reload();
                    } else if(data.statusCode == 201){
                        alert("Error!");
                    }
                } 
                });
            } else {
                alert ("Fields are empty!");
            }
        });
    });
</script>
