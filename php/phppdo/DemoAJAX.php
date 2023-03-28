<!DOCTYPE html>
<html>
    <head>
        <title>AJAX demo</title>
    </head>
    <body>

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
        <script src="JScript.js" type="text/javascript"></script>
        <script type="text/javascript">
                $(document).ready(function(){

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