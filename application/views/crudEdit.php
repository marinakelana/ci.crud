<?php $this->load->view('includes/header');?>
    <div class="container">
    <br>
    <br>
        <form method="post" action="<?php echo site_url('CrudController/update')?>/<?php echo $row->id; ?>">
            <div class="form-group">
                <label for="exampleInputEmail1">Title</label>
                <input type="text" class="form-control" name="title" value="<?php echo $row->title; ?>" aria-describedby="emailHelp" placeholder="Enter last name">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Content</label>
                <textarea type="text" class="form-control" name="content" value="<?php echo $row->content; ?>" aria-describedby="emailHelp" placeholder="Enter content"></textarea>
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Date</label>
                <input type="date" class="form-control" name="date" value="<?php echo $row->date; ?>" aria-describedby="emailHelp" placeholder="Enter date release">
            </div>
            <button type="submit" class="btn btn-primary" value="save">Submit</button>
            <a href="<?php echo site_url('CrudController')?>"><button type="button" class="btn btn-danger">Cancel</button></a>
        </form>  
    </div>


  </body>
</html>