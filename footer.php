<script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script>
<script src="//cdn.datatables.net/2.1.8/js/dataTables.min.js"></script>
<script>
  let table = new DataTable('#dataTable1');
</script>
<script>
    $(document).ready(function (){
      $('.confirm-delete').click(function(e)
    {
      e.preventDefault();
      confirmDialog=confirm("Are u sure to del?");
      if(confirmDialog)
    {
      var id= $(this).val();
      $.ajax({
        type:"DELETE",
        url:"employee/confirmdelete/"+id,
        success: function (response){
          alert("Successfully Deleted");
          window.location.reload();
          
        }
          
        });
      }
    });
    });
  </script>
  </body>
</html>