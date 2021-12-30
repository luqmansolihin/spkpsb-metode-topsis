            <?php
                require 'drone.php'
            ?>
            <div class="content mt-3">
                <div class="animated fadeIn">
                    <div class="ui-typography">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="card">
                                    <div class="card-header">
                                        <center><strong class="card-title" v-if="headerText">NOT FOUND</strong></center>
                                    </div>
                                    <div class="card-body">
                                        <div class="alert alert-danger" role="alert">
                                            <center>
                                                <img class="rounded-circle mx-auto d-block" src="images/sad.png">
                                                <b>ERROR 404</b><br>
                                                Woops. Looks like this page doesn't exist.
                                            </center>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> <!-- .content -->
        </div><!-- /#right-panel -->

        <!-- Right Panel -->