<?php add_categories_in_admin() ?>

<div class="col-md-12">
<div class="row">
<h1 class="page-header">
  Product Categories

</h1>


<div class="col-md-4">

    <h4 class="bg-success"><?php display_message(); ?> </h4>

    <form action="" method="post">

        <div class="form-group">
            <label for="category-title">Title</label>
            <input type="text" name="cat_title" class="form-control">
        </div>

        <div class="form-group">

            <input type="submit" name="add" class="btn btn-primary" value="Add Category">
        </div>


    </form>


</div>


<div class="col-md-8">

    <table class="table">
            <thead>


        <tr>
            <th>id</th>
            <th>Title</th>
        </tr>
            </thead>


    <tbody>
      <?php show_categories_in_admin(); ?>
    </tbody>

        </table>

</div>

















            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Morris Charts JavaScript -->
    <script src="js/plugins/morris/raphael.min.js"></script>
    <script src="js/plugins/morris/morris.min.js"></script>
    <script src="js/plugins/morris/morris-data.js"></script>

</body>

</html>
