<?php
/* @var $this yii\web\View */

?>


<div class="panel panel-default">
 <!-- <div class="panel-body"> -->
 <div class="modal-content">
  <div class="modal-header">
   <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
   <h4 class="modal-title" id="myModalLabel">User Token</h4>
  </div>
  <input type="hidden" name="" class="meal--id">
  <form class="form-user--order">
   <div class="modal-body">
    <div class="alert--area">

    </div>
    <div class="form-group">
     <label for="">Enter Token</label>
     <input type="text" required class="form-control user-token--input" placeholder="Enter Your Token">
    </div>
   </div>
   <div class="modal-footer">
    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
    <button type="submit" class="btn btn-primary btn--order-proceed">Proceed</button>
   </div>
  </form>
 </div>
 <!-- </div> -->
</div>