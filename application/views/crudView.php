<?php $this->load->view('includes/header');?>
    <div class="container">
    <br>
    <br>

        <!-- Button trigger modal -->
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
        Add
        </button>
    <br>
    <br>
        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Add Data</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form method="post" action="<?php echo site_url('CrudController/create')?>">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Title</label>
                        <input type="text" class="form-control" name="title" aria-describedby="emailHelp" placeholder="Enter title">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Content</label>
                        <textarea class="form-control" name="content" aria-describedby="emailHelp" placeholder="Enter content"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Date</label>
                        <input type="date" class="form-control" name="date" aria-describedby="emailHelp" placeholder="Enter date release">
                    </div>
                    <button type="submit" class="btn btn-primary" value="save">Submit</button>
                </form>
            </div>
            </div>
        </div>
        </div>


        <table class="table">
            <thead class="thead-dark">
                <tr>
                <th scope="col">ID</th>
                <th scope="col">Title</th>
                <th scope="col">Content</th>
                <th scope="col">Date</th>
                <th scope="col">Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($result as $row) {?>
                <tr>
                <th scope="row"><?php echo $row->id; ?></th>
                <td><?php echo $row->title; ?></td>
                <td><?php echo $row->content; ?></td>
                <td><?php echo $row->date; ?></td>
                <td> <a href="<?php echo site_url('CrudController/edit');?>/<?php echo $row->id;?>">Edit</a>  | 
                   <a href="<?php echo site_url('CrudController/delete');?>/<?php echo $row->id;?>">Delete</a> </td>
                </tr>
                <?php } ?>
            </tbody>
        </table>

    </div>

  </body>
</html>