
// ajax code for login form
$(function () {
   $("#loginForm").submit(function (e) {
       e.preventDefault();
       var form_data = $(this).serialize();
       var url = $(this).attr('action');
       $.ajax({
           type: "POST",
           url: url,
           dataType: "json", // Add datatype
           data: form_data,
           success: function(res) {
               console.log(res);
               if (res.status == true) {
                   window.location.href = res.redirect;
               }else {
                   document.getElementById('loginError').innerHTML = 'Please enter correct Username and Password.';
               }
           },
           error: function(error) {
               console.log(error.responseText);
           }
       });
   });
});

// load datatable
function loadDataTable() {
   $('#productsTable').DataTable({
       "ajax": {
           "url": "getProducts.php",
           "dataSrc": ""
       },
       "columns": [
           { "data": "SKU_Code"},
           { "data": "Name"},
           { "data": "Description"},
           { "data": "Quantity"},
           { "data": "Price"},
           { "data": ""},
           { "data": ""}
       ],
       "columnDefs": [ {
           "targets": -2,
           "data": null,
           "render": function(data, type, row) {
               var btn = '<input type="button" class="btn btn-primary updateBtn" value="Edit" id="'+'update'+row.SKU_Code+'" data-sku="'+row.SKU_Code+'" data-name="'+row.Name+'" data-description="'+row.Description+'" data-quantity="'+row.Quantity+'" data-price="'+row.Price+'" data-toggle="modal" data-target="#updateModal">';
               return btn;
           }
       }, {
           "targets": -1,
           "data": null,
           "render": function(data, type, row) {
               var btn = '<input type="button" class="btn btn-danger deleteBtn" value="Delete" id="'+'delete'+row.SKU_Code+'" data-sku="'+row.SKU_Code+'" data-name="'+row.Name+'" data-description="'+row.Description+'" data-quantity="'+row.Quantity+'" data-price="'+row.Price+'" data-toggle="modal" data-target="#deleteModal">';
               return btn;
           }
       } ]  
   });
}


// ajax form for create new product
$(function () {    
   $("#createForm").submit(function (e) {
      e.preventDefault();
      var form_data = $(this).serialize(); 
      $.ajax({
         type: "POST", 
         url: "createProduct.php",
         dataType: "json", // Add datatype
         data: form_data
      }).done(function (data) {
           if(data.status == true) {
               $('#createName').val('');
               $('#createDesc').val('');
               $('#createQuantity').val('');
               $('#createPrice').val('');
               $('#createModal').modal('hide');

               $("#productsTable").dataTable().fnDestroy()
               loadDataTable();
           } else {
               alert("nope")
           }
      }).fail(function (data) {
            console.log(data);
      });
   }); 
   });

   // show values in update form
   $("#updateModal").on('show.bs.modal', function (e) {
      var triggerLink = $(e.relatedTarget);
      var SKU = triggerLink.data("sku");
      var name = triggerLink.data("name");
      var description = triggerLink.data("description");
      var quantity = triggerLink.data("quantity");
      var price = triggerLink.data("price");
    
      $("#updateSKU").val(SKU);
      $("#updateName").val(name);
      $("#updateDesc").val(description);
      $("#updateQuantity").val(quantity);
      $("#updatePrice").val(price);
  });

   // ajax form for update product
   $(function () {    
      $("#updateForm").submit(function (e) {
         e.preventDefault();
         var form_data = $(this).serialize(); 
         $.ajax({
            type: "POST", 
            url: "updateProduct.php",
            dataType: "json", // Add datatype
            data: form_data
         }).done(function (data) {
            if(data.status == true) {
               console.log(data);
               $('#updateModal').modal('hide');
               $("#productsTable").dataTable().fnDestroy()
               loadDataTable();
               /*$('#' + data.SKU + ' .productName').html(data.name);
               $('#' + data.SKU + ' .productDesc').html(data.description);
               $('#' + data.SKU + ' .productQuantity').html(data.quantity);
               $('#' + data.SKU + ' .productPrice').html(data.price);*/
            } else {
               alert("nope")
            }
         }).fail(function (data) {
               console.log(data);
         });
      }); 
      });


   // show text in delete form
   $("#deleteModal").on('show.bs.modal', function (e) {
      var triggerLink = $(e.relatedTarget);
      var SKU = triggerLink.data("sku");
      console.log(SKU);
      var deleteText = 'Are you sure you want to delete? id: ' + SKU;
    
      $("#deleteSKU").val(SKU);
      $("#deleteText").html(deleteText);
  });

   // ajax form for delete product
   $(function () {    
      $("#deleteForm").submit(function (e) {
         e.preventDefault();
         var form_data = $(this).serialize(); 
         console.log(form_data);
         $.ajax({
            type: "POST", 
            url: "deleteProduct.php",
            dataType: "json", // Add datatype
            data: form_data
         }).done((data) => {
            if(data.status == true) {
               console.log(data);
               $('#deleteModal').modal('hide');
               $("#productsTable").dataTable().fnDestroy()
               loadDataTable();
            } else {
               alert("nope");
            }
         }).fail(function (data) {
               console.log(data);
         });
      }); 
   });

   // hide delete product modal on cancel
   $(function () {    
      document.getElementById("deleteCancel").addEventListener('click', function (e) {
         e.preventDefault();
         $('#deleteModal').modal('hide');
      }); 
   });

      