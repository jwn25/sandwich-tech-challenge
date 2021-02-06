$(document).ready(function () {
 $('#authModal').on('show.bs.modal', function (event) {
  var button = $(event.relatedTarget) // Button that triggered the modal
  var meal_id = button.data('meal-id') // Extract info from data-* attributes
  // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
  // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
  var modal = $(this)
  // modal.find('.modal-title').text('New message to ' + recipient)
  // modal.find('.modal-body input').val(recipient)
  modal.find('.meal--id').val(meal_id)
 })


 $(document).on('submit', '.form-user--auth', function (e) {
  e.preventDefault()

  $('.alert--area').empty();
  let token = $('.user-token--input').val();
  let auth_status = processUserToken(token)

  if (!auth_status) {
   $('.alert--area').html("<div class='alert alert-danger'>Invalid authentication token.</div>")
   return;
  }

  let meal_id = $('.meal--id').val();
  window.location.replace(`/meals?token=${token}&id=${meal_id}`)
 })

 function processUserToken(token) {
  let auth = false
  $.ajax({
   url: "/site/authenticate-user?token=" + token,
   async: false,
   dataType: 'json',
   success: function (json) {
    auth = json.auth
   }
  });

  return auth;
 }


 $(document).on('submit', '.form-user--order', function (e) {
  e.preventDefault()

  $('.alert--area').empty();
  let token = $('.user-token--input').val();
  let auth_status = processUserToken(token)

  if (!auth_status) {
   $('.alert--area').html("<div class='alert alert-danger'>Invalid authentication token.</div>")
   return;
  }

  let meal_id = $('.meal--id').val();
  window.location.replace(`/meals/my-orders?token=${token}`)
 })
})

