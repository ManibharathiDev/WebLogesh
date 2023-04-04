<!DOCTYPE html>
<html>
    <head>
        <title>AJAX demo</title>
        <style type="text/css">
            .edit{
                background: #f00;
                color: #FFF;
                text-decoration: none;
                font-size: 12px;
                padding-left: 10px;
                border-radius: 5px;
                padding-right: 10px;
            }

            .delete{
                background: #222623;
                color: #FFF;
                text-decoration: none;
                font-size: 12px;
                padding-left: 10px;
                border-radius: 5px;
                padding-right: 10px;
            }
        </style>
    </head>
    <body>

        <form id='insertForm'>  
            <table>
                <tr>
                    <td>User Name</td><td>:</td><td><input type="text" name="uname" id="uname"></td>
                    </tr>
                    <tr>
                    <td>Password</td><td>:</td><td><input type="password" name="pword" id="pword"></td>
</tr>
                    <tr>
                        <input type="hidden" id="myId" name="myId"/>
                    <td><input type="submit" id="submit" value="Register"></td>
</tr>
</table>
            <br/>
            <br/>
        </form>

        <table id="myTable" border="1" width="100%">
            <tr>
                <td>id</td>
                <td>Name</td>
                <td>Password</td>
                <td>Action</td>
            </tr>
        </table>    

        <!-- prerequeist -->
        <input type="button" value="Get Data" id="getData"/>
        <script
  src="https://code.jquery.com/jquery-3.6.4.min.js"
  integrity="sha256-oP6HI9z1XaZNBrJURtCoUT5SUnxFr8s3BzRl+cbzUq8="
  crossorigin="anonymous"></script>

        <script src="JScript.js" type="text/javascript"></script>
        <script type="text/javascript">
                $(document).ready(function(){
                    $i = 0;
                    getData();

                    $('#insertForm').submit(function(e){
                        e.preventDefault();
                        $.ajax({
                            'url':'DbInsert.php',
                            'type':'POST',
                             'processData':false,
                             'contentType':false,
                              data:new FormData(this),
                              dataType:'JSON',
                             success:function(response)
                             {
                                if(response.success == 1)
                                {
                                    //$('#myTable').html("");
                                    //$('#myTable').find("tr:gt(0)").remove();
                                    //getData();
                                    $i++;
                                    let myValue = "<tr id='"+myData[index].id+"'>";
                                    myValue +="<td>";
                                    myValue += $i;
                                    myValue +="</td>";
                                    myValue +="<td>";
                                    myValue += response.uname;
                                    myValue +="</td>";
                                    myValue +="<td>";
                                    myValue += response.pword;
                                    myValue +="</td>";
                                    myValue +="<td>";
                                    myValue += "<a href='#' id='"+response.id+"' class='edit'>";
                                    myValue += "&nbsp;&nbsp;<a href='#' id='"+response.id+"' class='delete'>Delete</a>";
                                    myValue +="</td>";
                                    myValue += "</tr>";    
                                    $('#myTable').append(myValue);  
                        
                                }
                                else
                                {
                                    alert("DB Insertion error");
                                }
                             }
                        });

                    });

                    //Static
                    $('.edit').click(function(){
                        alert("Edit Clicked");
                    });

                    $(document).on('click','.delete',function(){
                        let id = this.id;
                            $.ajax({
                                'url':'DBDelete.php?id='+id,
                                'type':'get',
                                dataType:'JSON',
                                success:function(data)
                                {
                                    if(data.success == 1)
                                    {
                                            alert("Deleted");
                                    }
                                    else
                                    {
                                        alert("Data not found!");
                                    }
                                }
                            });

                    });

                    $(document).on('click','.edit',function(){
                            let id = this.id;
                            $.ajax({
                                'url':'DBGet.php?id='+id,
                                'type':'get',
                                dataType:'JSON',
                                success:function(data)
                                {
                                    if(data.success == 1)
                                    {
                                            $.each(data.data,function(index){
                                                $('#uname').val(data.data[index].username);
                                                $('#pword').val(data.data[index].password);
                                                $('#submit').val("Update");
                                                $('#myId').val(data.data[index].id);
                                            });
                                    }
                                    else
                                    {
                                        alert("Data not found!");
                                    }
                                }
                            });
                    });

                    //Dynamic
                    // $(document).on('click','.edit',function(){
                    //     let id = this.id;
                    //     //alert(id);
                    //     $.ajax({
                    //         'url':'DBGet.php?id='+id,
                    //         'type':'get',
                    //         dataType:'JSON',
                    //         success:function(data)
                    //         {

                    //         }
                    //     });
                    // });

                    function getData(){
                        $.ajax({
                        'url':'JsonDemo.php',
                        'type':'POST',
                        dataType:'JSON',
                        success:function(data)
                        {
                            //console.log(data);
                            //console.log(data.success);

                            if(data.success == 1)
                            {
                                //console.log(data.data);
                                let myData = data.data;    

                                $.each(myData,function(index){
                                    $i++;
                                    let myValue = "<tr id='"+myData[index].id+"'>";
                                    myValue +="<td>";
                                    myValue += $i;
                                    myValue +="</td>";
                                    myValue +="<td id='tname-'"+myData[index].id+">";
                                    myValue += myData[index].username;
                                    myValue +="</td>";
                                    myValue +="<td>";
                                    myValue += myData[index].password;
                                    myValue +="</td>";
                                    myValue +="<td>";
                                    myValue += "<a href='#' id='"+myData[index].id+"' class='edit'>Edit</a>";
                                    myValue += "&nbsp;&nbsp;<a href='#' id='"+myData[index].id+"' class='delete'>Delete</a>";
                                    myValue +="</td>";
                                    myValue += "</tr>";    
                                    $('#myTable').append(myValue);     
                                    console.log(myData[index]);
                                });

                            }

                    
                        }
                        
                        });
                    }

                    $('#getData').click(function(){
                        $.ajax({
                        'url':'JsonDemo.php',
                        'type':'POST',
                        dataType:'JSON',
                        success:function(data)
                        {
                            //console.log(data);
                            //console.log(data.success);

                            if(data.success == 1)
                            {
                                //console.log(data.data);
                                let myData = data.data;    

                                $.each(myData,function(index){
                                    let myValue = "<tr>";
                                    myValue +="<td>";
                                    myValue += myData[index].id;
                                    myValue +="</td>";
                                    myValue +="<td>";
                                    myValue += myData[index].username;
                                    myValue +="</td>";
                                    myValue +="<td>";
                                    myValue += myData[index].password;
                                    myValue +="</td>";
                                    myValue +="<td>";
                                    myValue += "<input type='button' value='edit'>";
                                    myValue += "<input type='button' value='delete'>";
                                    myValue +="</td>";
                                    myValue += "</tr>";    
                                    $('#myTable').append(myValue);     
                                    console.log(myData[index]);
                                });

                            }

                    
                        }
                        
                        });
                       
                    })

                    
                });
        </script>
    </body>
</html>