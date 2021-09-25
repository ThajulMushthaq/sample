<html>
<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"> </script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>

<style>
  .title{
    text-align: center;
  }
  .card{
    width: 100%;
    height: 400px;
    margin-top: 5px;
    padding: 5px;
    background-color: lightseagreen;
    color: whitesmoke;
  }
</style>

</head>
<body>
<div class="title">
  <h3 class="text-secondary">Manage Student Details</h3>
  <input type="button" id="display" name="button" value="Display All Data" class="btn btn-primary">
</div>

<div class="card">
  <div class="card-header">
    <h2 id="fname"></h2>
    <h2 id="lname"></h2>
  </div>
  <div class="card-body">
    <p id="address"></p>
  </div>
  <div class="card-footer">
    <p id="gender"></p>
  </div>  
</div>
<ul>
  <li></li>
</ul>
<script>

$(document).ready(function() {
  $("#display").click(function() {
    $.ajax({
      type: "GET",
      url: "ajax.php",
      // dataType: "json",
      success: function(response){                    
            // $(".card").html(response);
            // console.log(response);
            var arr = JSON.parse(response);
            $.each(arr, function(index, value) {
              console.log('The value at arr[' + index + '] is: ' + value);
              // console.log( value.text );             
            });
            $( "li" ).each(function( index ) {
              console.log( index + ": " + $( this ).text() );
            });

            $('#fname').html(arr.fname);
            $('#lname').html(arr.lname);
            $('#address').html(arr.address);
      }
    });
  });
});
</script>


<!-- <script>
$(document).ready(function(){
    $(window).on('scroll',function(){
        var lastId = $('.loader').attr('id');
        if(($(window).scrollTop() == $(document).height() - $(window).height()) && (lastId != 0)){
            load_more_data(lastId);
        }
    });
    function load_more_data(lastId){
        $.ajax({
                type:'GET',
                url:'backend-script.php',
                dataType:'html',
                data:{last_id:lastId},
                beforeSend:function(){
                    $('.loader').show();
                },
                success:function(data){
                  setTimeout(function() {
                    $('.loader').remove();
                    $('#load-content').append(data);
                  },1000);
                    
                }
            });
    }
  });

</script> -->

</body>
</html>