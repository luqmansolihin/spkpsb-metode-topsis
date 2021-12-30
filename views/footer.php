    <script src="vendors/jquery/dist/jquery.min.js"></script>
    <script src="vendors/popper.js/dist/umd/popper.min.js"></script>
    <script src="vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="assets/js/main.js"></script>

    <script src="vendors/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="vendors/datatables.net-bs4/js/dataTables.bootstrap4.min.js"></script>
    <script src="vendors/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
    <script src="vendors/datatables.net-buttons-bs4/js/buttons.bootstrap4.min.js"></script>
    <script src="vendors/datatables.net-buttons/js/buttons.html5.min.js"></script>
    <script src="vendors/datatables.net-buttons/js/buttons.print.min.js"></script>
    <script src="vendors/datatables.net-buttons/js/buttons.colVis.min.js"></script>
    <script src="assets/js/init-scripts/data-table/datatables-init.js"></script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script>
        //Add Input Fields
        $(document).ready(function() {
            var max_fields = 10; //Maximum allowed input fields 
            var wrapper    = $(".presKec"); //Input fields wrapper
            var add_button = $(".add_presKec"); //Add button class or ID
            var x = 1; //Initlal input field is set to 1
            
            //When user click on add input button
            $(add_button).click(function(e){
                e.preventDefault();
                //Check maximum allowed input fields
                if(x < max_fields){ 
                    x++; //input field increment
                    //add input field
                    $(wrapper).append('<div><input type="text" id="text-input" name="presKec[]" placeholder="Masukan Prestasi Kecamatan" class="form-control"> <a href="javascript:void(0);" class="remove_presKec"><small class="help-block form-text">Remove</small></a></div>');
                }
            });
            
            //when user click on remove button
            $(wrapper).on("click",".remove_presKec", function(e){ 
                e.preventDefault();
                $(this).parent('div').remove(); //remove inout field
                x--; //inout field decrement
            })
        });
    </script>
    <script>
        //Add Input Fields
        $(document).ready(function() {
            var max_fields = 10; //Maximum allowed input fields 
            var wrapper    = $(".presKot"); //Input fields wrapper
            var add_button = $(".add_presKot"); //Add button class or ID
            var x = 1; //Initlal input field is set to 1
            
            //When user click on add input button
            $(add_button).click(function(e){
                e.preventDefault();
                //Check maximum allowed input fields
                if(x < max_fields){ 
                    x++; //input field increment
                    //add input field
                    $(wrapper).append('<div><input type="text" id="text-input" name="presKot[]" placeholder="Masukan Prestasi Kota" class="form-control"> <a href="javascript:void(0);" class="remove_presKot"><small class="help-block form-text">Remove</small></a></div>');
                }
            });
            
            //when user click on remove button
            $(wrapper).on("click",".remove_presKot", function(e){ 
                e.preventDefault();
                $(this).parent('div').remove(); //remove inout field
                x--; //inout field decrement
            })
        });
    </script>
    <script>
        //Add Input Fields
        $(document).ready(function() {
            var max_fields = 10; //Maximum allowed input fields 
            var wrapper    = $(".presNas"); //Input fields wrapper
            var add_button = $(".add_presNas"); //Add button class or ID
            var x = 1; //Initlal input field is set to 1
            
            //When user click on add input button
            $(add_button).click(function(e){
                e.preventDefault();
                //Check maximum allowed input fields
                if(x < max_fields){ 
                    x++; //input field increment
                    //add input field
                    $(wrapper).append('<div><input type="text" id="text-input" name="presNas[]" placeholder="Masukan Prestasi Nasional" class="form-control"> <a href="javascript:void(0);" class="remove_presNas"><small class="help-block form-text">Remove</small></a></div>');
                }
            });
            
            //when user click on remove button
            $(wrapper).on("click",".remove_presNas", function(e){ 
                e.preventDefault();
                $(this).parent('div').remove(); //remove inout field
                x--; //inout field decrement
            })
        });
    </script>
</body>

</html>