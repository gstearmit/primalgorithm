<?php require("header.php"); ?>

    <div class="container">
        <div class="row">
        <div class="col-sm-1">
          </div>
          <div class="col-sm-10">
            <div class="panel panel-primary">
                <div class="panel-heading">
                  <h3 class="panel-title">Input Panel</h3>
                </div>
                <div class="panel-body">
                  <form class="form-horizontal" action="process.php" method="post" enctype="multipart/form-data">

                    <div class="form-group">
                      <label for="nude_no" class="col-sm-2 control-label">Number of Node</label>
                      <div class="col-sm-10">
                        <input type="number" required="required" name="node_no" id="node_no" min="10" class="form-control" placeholder="Please enter the nude number">
                      </div>
                    </div>

                    <div class="form-group">
                      <label for="algorithm" class="col-sm-2 control-label">Choose Algorithm</label>
                      <div class="col-sm-10">
                       <label class="radio-inline">
                          <input type="radio" name="optradio">Prim
                        </label>
                        <label class="radio-inline">
                          <input type="radio" name="optradio">kruskal
                        </label>
                      </div>
                    </div>

                    <div class="form-group">
                      <div class="col-sm-2 control-label"></div>
                      <div class="col-sm-10">
                        <div class="input-group">
                          <label class="input-group-btn"> 
                          <span class="btn btn-primary"> Browse&hellip; 
                          <input type="file" name="input_file" required="required" id="fileUpload" style="display: none;" multiple>
                          </span>
                          </label> <input type="text" name="input_file_name" class="form-control" readonly>
                        </div>
                        <span class="help-block"> Select your input file </span>
                      </div>
                    </div>

                    <input type="hidden" min=1 name="step-btn-counter" id="step-btn-counter" value="0">

                    <div class="form-group">
                      <div class="col-sm-offset-2 col-sm-10">
                        <button type="submit" name="btn-upload" class="btn btn-success">Proces</button>
                        <button name="btn-step" id="btn-step-process" class="btn btn-primary">Steps</button>
                        <button name="btn-cancel" class="btn btn-danger btn-cancel-process">Cancel</button>
                      </div>
                    </div>
                  </form>
                </div>
              </div>
            </div>
            <div class="col-sm-1">
            </div>
        </div>


          <br><br>
            <!-- This is for output panel-->
            <div class="row" id="output_content" style="display: none;">
            <div class="col-sm-1">
              </div>
              <div class="col-sm-10">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                      <h3 class="panel-title">Output Panel</h3>
                    </div>
                    
                    <div class="panel-body">
                    <p id="vertex-no"></p>
                    <p id="edges-no"></p>
                      <table class="table" >
                        <thead>
                          <tr>
                            <th>Edges</th>
                            <th>Cost</th>
                          </tr>
                        </thead>
                        <tbody id="table-body">
                         
                        </tbody>
                    </table>
                    <div id="first">
                       <span class="sum"></span>
                    </div>

                    </div>
                  </div>
                </div>
                <div class="col-sm-1">
                </div>
            </div>
            <!-- End of output panel-->

    </div><!-- /.container -->

<?php require("footer.php"); ?>

   
