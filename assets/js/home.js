$(document).ready(function() 
  {
   $("#loading").hide();
   check_data();
  });

function check_data(){
    // $("#loading").show();
  $.ajax({
    url:'check_data',
    type:'get',
    data: {},
        success:function(data)
            {
                var res = data;
                // console.log(res);
                if(data == "success")
                    {
                        $("#delete").show();
                        $("#get_data").hide();
                    }
                else{
                        $("#delete").hide();
                        $("#get_data").show();
                    // save_data(datasave);
                }
            },         
  });
    
}

function load_data(){
    $("#loading").show();
  $.ajax({
    url:'load_data',
    type:'get',
    data: {},
        success:function(data)
            {
                // var obj = JSON.parse(data);
                console.log(data);
                $("#loading").hide();
                if(data == "error")
                    {
                        // alert("Data import failed!!")
                        if(!alert('Data import failed!!')){window.location.reload();}
                    }

                else
                    {
                       if(!alert('Data import Success!!')){window.location.reload();}
                    }

                // save_data(datasave);
            },         
  });
    
}

function destroy_data(){
    $("#loading").show();
  $.ajax({
    url:'destroy_data',
    type:'get',
    data: {},
        success:function(data)
            {
                // var obj = JSON.parse(data);
                // console.log(data);
                // $("#loading").hide();
                $("#loading").hide();
                if(status == "error")
                    {
                        // alert("Data Deletion Complete!!");
                        if(!alert('Data Deletion Complete!!')){window.location.reload();}
                    }

                else
                    {
                        // alert("No Data to Delete!!");
                       if(!alert('No Data to Delete!!')){window.location.reload();}
                    }

                // save_data(datasave);
            },         
  });
    
}

$(document).ready(function() {

    $(function() {
               $('#table').DataTable({
               processing: true,
               serverSide: true,
               ajax: "grid_data",
               columns: [
                        { data: 'fpl_id', name: 'fpl_id' },
                        { data: 'first_name', name: 'first_name' },
                        { data: 'second_name', name: 'second_name' },
                        { data: 'action', name: 'action' }
                     ]
            });


         });

    $(document).on('click', '.view', function(){
        $("#loading").show();
        var id = $(this).attr('id');
          // console.log(id);
          $.ajax({
           url:"review_data",
           Type:"get",
           data: { id:id },
           success:function(data){
            
            // console.log(data);

            var obj = JSON.parse(data);
            $('#fpl_id').val(obj.fpl_id);
            $('#fname').val(obj.first_name+' '+obj.second_name);
            $('#form').val(obj.form);
            $('#total_score').val(obj.total_score);
            $('#influence').val(obj.influence);
            $('#creativity').val(obj.creativity);
            $('#ict_index').val(obj.ict_index);
            $("#loading").hide();
            $('#confirmmodal').modal('show');
           }
          })
    });
})

        


