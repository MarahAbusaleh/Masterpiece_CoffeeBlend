@extends('Admin.Layouts.master')
@section('title', 'Add Category')
@section('content')

    <div class="container-fluid">
                <!--  Row 1 -->
                <div class="row">
                    <!------------------------------------- Add Item Section ------------------------------------->
                    <div class="col-lg-10">
                        <h3>Add Category</h3>
                        <br>
                        <br>
                        <form>
                            <div class="mb-3">
                                <label for="addedCateroryName" class="form-label">Name :</label>
                                <input type="text" class="form-control" id="addedCateroryName" name="addedCateroryName">
                            </div>
                            <div class="mb-3">
                                <label for="addedCateroryIamge" class="form-label">Image 1 :</label>
                                <input type="file" class="form-control" id="addedCateroryImage" name="addedCateroryImage">
                            </div>
                            <div class="mb-3">
                                <label for="addedCateroryIamge" class="form-label">Image 2 :</label>
                                <input type="file" class="form-control" id="addedCateroryImage" name="addedCateroryImage">
                            </div>
                            <div class="mb-3">
                                <label for="addedCateroryIamge" class="form-label">Image 3 :</label>
                                <input type="file" class="form-control" id="addedCateroryImage" name="addedCateroryImage">
                            </div>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                    
                    <!--/////////////////////////////// END Of Add Item Section ///////////////////////////////-->
                </div>
            </div>
        </div>
    </div>

@endsection