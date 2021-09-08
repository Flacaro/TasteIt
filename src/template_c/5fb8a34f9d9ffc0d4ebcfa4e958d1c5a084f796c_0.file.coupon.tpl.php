<?php
/* Smarty version 3.1.39, created on 2021-09-06 16:39:57
  from 'C:\Users\selen\OneDrive\Documents\app\src\templates\admin\showCouponPage.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6136283ddccd79_99737401',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5fb8a34f9d9ffc0d4ebcfa4e958d1c5a084f796c' => 
    array (
      0 => 'C:\\Users\\selen\\OneDrive\\Documents\\app\\src\\templates\\admin\\showCouponPage.tpl',
      1 => 1630924204,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6136283ddccd79_99737401 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_9389641306136283ddcc403_20050756', 'admin');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, 'src/templates/admin/leftMenu.tpl');
}
/* {block 'admin'} */
class Block_9389641306136283ddcc403_20050756 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'admin' => 
  array (
    0 => 'Block_9389641306136283ddcc403_20050756',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <div class="content">
    <div class="row">
      <div class="col-md-4">
        <div class="card card-user">
          <div class="image">
            <img src="assets/img/damir-bosnjak.jpg" alt="...">
          </div>
          <div class="card-body">
            <div class="author">
              <a href="#">
                <img class="avatar border-gray" src="assets/img/mike.jpg" alt="...">
                <h5 class="title">Chet Faker</h5>
              </a>
              <p class="description">
                @chetfaker
              </p>
            </div>
            <p class="description text-center">
              "I like the way you work it <br>
              No diggity <br>
              I wanna bag it up"
            </p>
          </div>
          <div class="card-footer">
            <hr>
            <div class="button-container">
              <div class="row">
                <div class="col-lg-3 col-md-6 col-6 ml-auto">
                  <h5>12<br><small>Files</small></h5>
                </div>
                <div class="col-lg-4 col-md-6 col-6 ml-auto mr-auto">
                  <h5>2GB<br><small>Used</small></h5>
                </div>
                <div class="col-lg-3 mr-auto">
                  <h5>24,6$<br><small>Spent</small></h5>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="card">
          <div class="card-header">
            <h4 class="card-title">Team Members</h4>
          </div>
          <div class="card-body">
            <ul class="list-unstyled team-members">
              <li>
                <div class="row">
                  <div class="col-md-2 col-2">
                    <div class="avatar">
                      <img src="assets/img/faces/ayo-ogunseinde-2.jpg" alt="Circle Image" class="img-circle img-no-padding img-responsive">
                    </div>
                  </div>
                  <div class="col-md-7 col-7">
                    DJ Khaled
                    <br />
                    <span class="text-muted"><small>Offline</small></span>
                  </div>
                  <div class="col-md-3 col-3 text-right">
                    <btn class="btn btn-sm btn-outline-success btn-round btn-icon"><i class="fa fa-envelope"></i></btn>
                  </div>
                </div>
              </li>
              <li>
                <div class="row">
                  <div class="col-md-2 col-2">
                    <div class="avatar">
                      <img src="assets/img/faces/joe-gardner-2.jpg" alt="Circle Image" class="img-circle img-no-padding img-responsive">
                    </div>
                  </div>
                  <div class="col-md-7 col-7">
                    Creative Tim
                    <br />
                    <span class="text-success"><small>Available</small></span>
                  </div>
                  <div class="col-md-3 col-3 text-right">
                    <btn class="btn btn-sm btn-outline-success btn-round btn-icon"><i class="fa fa-envelope"></i></btn>
                  </div>
                </div>
              </li>
              <li>
                <div class="row">
                  <div class="col-md-2 col-2">
                    <div class="avatar">
                      <img src="assets/img/faces/clem-onojeghuo-2.jpg" alt="Circle Image" class="img-circle img-no-padding img-responsive">
                    </div>
                  </div>
                  <div class="col-ms-7 col-7">
                    Flume
                    <br />
                    <span class="text-danger"><small>Busy</small></span>
                  </div>
                  <div class="col-md-3 col-3 text-right">
                    <btn class="btn btn-sm btn-outline-success btn-round btn-icon"><i class="fa fa-envelope"></i></btn>
                  </div>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </div>
      <div class="col-md-8">
        <div class="card card-user">
          <div class="card-header">
            <h5 class="card-title">Edit Profile</h5>
          </div>
          <div class="card-body">
            <form>
              <div class="row">
                <div class="col-md-5 pr-1">
                  <div class="form-group">
                    <label>Company (disabled)</label>
                    <input type="text" class="form-control" disabled="" placeholder="Company" value="Creative Code Inc.">
                  </div>
                </div>
                <div class="col-md-3 px-1">
                  <div class="form-group">
                    <label>Username</label>
                    <input type="text" class="form-control" placeholder="Username" value="michael23">
                  </div>
                </div>
                <div class="col-md-4 pl-1">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Email address</label>
                    <input type="email" class="form-control" placeholder="Email">
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-6 pr-1">
                  <div class="form-group">
                    <label>First Name</label>
                    <input type="text" class="form-control" placeholder="Company" value="Chet">
                  </div>
                </div>
                <div class="col-md-6 pl-1">
                  <div class="form-group">
                    <label>Last Name</label>
                    <input type="text" class="form-control" placeholder="Last Name" value="Faker">
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-12">
                  <div class="form-group">
                    <label>Address</label>
                    <input type="text" class="form-control" placeholder="Home Address" value="Melbourne, Australia">
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-4 pr-1">
                  <div class="form-group">
                    <label>City</label>
                    <input type="text" class="form-control" placeholder="City" value="Melbourne">
                  </div>
                </div>
                <div class="col-md-4 px-1">
                  <div class="form-group">
                    <label>Country</label>
                    <input type="text" class="form-control" placeholder="Country" value="Australia">
                  </div>
                </div>
                <div class="col-md-4 pl-1">
                  <div class="form-group">
                    <label>Postal Code</label>
                    <input type="number" class="form-control" placeholder="ZIP Code">
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-12">
                  <div class="form-group">
                    <label>About Me</label>
                    <textarea class="form-control textarea">Oh so, your weak rhyme You doubt I'll bother, reading into it</textarea>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="update ml-auto mr-auto">
                  <button type="submit" class="btn btn-primary btn-round">Update Profile</button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
<?php
}
}
/* {/block 'admin'} */
}
