<!DOCTYPE html>
<html>
    <head>
        <title>AJAX demo</title>
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
                    <td><input type="submit" value="Register"></td>
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
        <script src="JScript.js" type="text/javascript"></script>
        <script type="text/javascript">
                $(document).ready(function(){

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
                                    let myValue = "<tr>";
                                    myValue +="<td>";
                                    myValue += response.id;
                                    myValue +="</td>";
                                    myValue +="<td>";
                                    myValue += response.uname;
                                    myValue +="</td>";
                                    myValue +="<td>";
                                    myValue += response.pword;
                                    myValue +="</td>";
                                    myValue +="<td>";
                                    myValue += "<a href='#' id='"+response.id+"' class='edit'>";
                                    myValue += "<input type='button' value='delete'>";
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

                    //Dynamic
                    $(document).on('click','.edit',function(){
                        let id = this.id;
                        alert(id);
                    });

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
                                    myValue += "<a href='#' id='"+myData[index].id+"' class='edit'>Edit</a>";
                                    myValue += "<input type='button' value='delete'>";
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