                
<div class="property-filter widget">
    <div class="content">
        <form method="post" action="actions/before_advance_search.php">
            <div class="location control-group">
                <label class="control-label" for="property_type">
                    Property Type
                </label>
                <div class="controls">
                    <select name="category" id="property_type">
                        <option value="House">Houses</option>
                          <option value="Land">Lands</option>
                          <option value="Building">Buildings</option>
                          <option value="Appartment">Appartments</option>
                          <option value="Holiday Resorts">Resorts</option>
                          <option value="Rooms">Rooms</option>
                    </select>
                </div><!-- /.controls -->
            </div><!-- /.control-group -->

            <div class="type control-group">
                <label class="control-label" for="contract">
                    Contract Type
                </label>
                <div class="controls">
                
                    <select name="pro_type" id="contract">
                          <option value="Sale">Sale</option>
                          <option value="Rent">Rent</option>
                          <option value="Lease">Lease</option>
                          <option value="Other">Other</option>
                    </select>
                    
                </div><!-- /.controls -->
            </div><!-- /.control-group -->

  
			<div class="type control-group">
                <label class="control-label" for="Location">
                    Location
                </label>
                <div class="controls">
                
                    <select name="district" id="Location">
                        <?php include('templates/district_selection.php'); ?>
                    </select>
                    
                </div><!-- /.controls -->
            </div><!-- /.control-group -->


            <div class="price-from control-group">
                <label class="control-label" for="inputPriceFrom">
                    Price from
                </label>
                <div class="controls">
                    <input type="text" id="inputPriceFrom" name="inputPriceFrom">
                </div><!-- /.controls -->
            </div><!-- /.control-group -->

            <div class="price-to control-group">
                <label class="control-label" for="inputPriceTo">
                    Price to
                </label>
                <div class="controls">
                    <input type="text" id="inputPriceTo" name="inputPriceTo">
                </div><!-- /.controls -->
            </div><!-- /.control-group -->

            <div class="price-value">
                <span class="from"></span><!-- /.from -->
                -
                <span class="to"></span><!-- /.to -->
            </div><!-- /.price-value -->

            <div class="price-slider">
            </div><!-- /.price-slider -->

            <div class="form-actions">
                <input type="submit" value="Filter now!" class="btn btn-primary btn-large">
            </div><!-- /.form-actions -->
        </form>
    </div><!-- /.content -->
</div><!-- /.property-filter -->