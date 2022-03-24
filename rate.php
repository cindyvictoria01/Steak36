
<!DOCTYPE html>
<html>
  <head>
    <link href="template_admin/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="template_admin/css/sb-admin-2.min.css" rel="stylesheet">
    <!-- Custom styles for this page -->
    <link href="template_admin/vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
    <link rel='stylesheet' href='http://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css'>
    <link rel='stylesheet' href='https://raw.githubusercontent.com/kartik-v/bootstrap-star-rating/master/css/star-rating.min.css'>
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    
    <script type="text/javascript" src="template_admin/ckeditor/ckeditor.js"></script>
    <meta charset="utf-8">
      <title>Rating System</title>
        <style>
          
          form,label { margin: 0; padding: 0; }
          body{ margin: 20px; }
          .content{
              width: 408px;
              border: 1px #ccc solid;
              padding: 15px;
              margin: auto;
              height: 200px;
          }
          .rating {
              width: auto;
              border: none;
              float: left;
          }
          .rating > input { display: none; }
          .rating > label::before {
              margin: 5px;
              font-size: 1.25em;
              font-family: FontAwesome;
              display: inline-block;
              content: "\f005";
          }
          .rating > label {
              color: #ddd;
              float: right;
          }
          .rating > input:checked ~ label,
          .rating:not(:checked) > label:hover,
          .rating:not(:checked) > label:hover ~ label {
              color: #f7d106;
          }
          .rating > input:checked + label:hover,
          .rating > input:checked ~ label:hover,
          .rating > label:hover ~ input:checked ~ label,
          .rating > input:checked ~ label:hover ~ label {
              color: #fce873;
          }
          h4 {
              font-weight: normal;
              margin-top: 40px;
              margin-bottom: 0px;
          }
          #hasil {
              font-size: 20px;
          }
          #star {
              float: left;
              padding-left: 20px;
          }
          #star span{
              padding: 3px;
              font-size: 20px;
          }
          .on { color:#f7d106 }
          .off { color:#ddd; }
    </style>
    </head>
    <body>
      
      <div class="container">
        <form id='rating' method="POST" action="insert_feedback.php">

          <div class="form-group">
            <label for="email">Email Customer</label>
            <input type="email" name="email" class="form-control" placeholder="Email Customer" required>
          </div>
          <div class="form-group">
            <label for="nama">Nama Customer</label>
            <input type="text" name="nama" class="form-control" placeholder="Nama Customer" required>
          </div>
          <div class="form-group">
            <label for="isi">Isi Feedback</label>
            <textarea class="form-control" name="isi" rows="4"></textarea>
          </div>
          <DIV class="FORM-GROUP">
            <label for="star">Rate Your Experience</label>
          </DIV><br>
        <div class="rating">
          <input type="radio" class="rate" id="star5" name="rating" value="5" <?php if (isset($c) && $c == '5') { echo 'checked'; } ?>  />
              <label for="star5" title="Sempurna - 5 Bintang"></label>
           
        <input type="radio" class="rate" id="star4" name="rating" value="4" <?php if (isset($c) && $c == '4') { echo 'checked'; } ?> />
              <label for="star4" title="Sangat Bagus - 4 Bintang"></label>
           
        <input type="radio" class="rate" id="star3" name="rating" value="3" <?php if (isset($c) && $c == '3') { echo 'checked'; } ?> />
              <label for="star3" title="Bagus - 3 Bintang"></label>
           
        <input type="radio" class="rate" id="star2" name="rating" value="2" <?php if (isset($c) && $c == '2') { echo 'checked'; } ?> />
              <label for="star2" title="Tidak Buruk - 2 Bintang"></label>
           
        <input type="radio" class="rate" id="star1" name="rating" value="1" <?php if (isset($c) && $c == '1') { echo 'checked'; } ?> />
        <label for="star1" title="Buruk - 1 Bintang"></label>
        </div>
        
              
        <br><br><br><br>
        <div class="form-group">
          <button type="submit" class="btn btn-success">Submit</button>
          <button type="reset" class="btn btn-danger">Cancel</button>
        </div>
      
        </form>
      </div>
        
        

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script type="text/javascript">
          $(document).ready(function () {
              $("#rating .rate").click(function () {
                
          $.ajax({
                    url : "./insert_feedback.php",
                      method : "POST",
                      data : {rate : $(this).val()},
                      success: function(obj) {
                        var obj = obj.split('|');

                        $('#star'+obj[0]).attr('checked');
                        $('#hasil').html('Rating '+obj[1]+'.0');
                        $('#star').html(obj[2]);
                        alert("terima kasih atas penilaian anda");
                      }
                  });
              });
          });
        </script>
        <script>
          /* To Disable Inspect Element */
          $(document).bind("contextmenu",function(e) {
            e.preventDefault();
          });

          $(document).keydown(function(e){
              if(e.which === 123){
                  return false;
              }
          });
    </script>
  </body>
</html>