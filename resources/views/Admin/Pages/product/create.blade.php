@extends('Admin.Layouts.master')
@section('title', 'Add Products')
@section('content')

<div class="container-fluid">
                <!--  Row 1 -->
                <div class="row">
                    <!------------------------------------- Add Product Section ------------------------------------->
                    <div class="col-lg-10">
                        <h3>Add Product</h3>
                        <br>
                        <br>
                        <form>
                            <div class="mb-3">
                                <label for="addedItemName" class="form-label">Name :</label>
                                <input type="text" class="form-control" id="addedItemName" name="addedItemName">
                            </div>
                            <div class="mb-3">
                                <label for="addedItemPrice" class="form-label">Price :</label>
                                <input type="text" class="form-control" id="addedItemPrice" name="addedItemPrice">
                            </div>
                            <div class="mb-3">
                                <label for="addedItemDesc" class="form-label">Description :</label>
                                <textarea class="form-control" id="addedItemDesc" name="addedItemDesc"></textarea>
                            </div>
                            <div class="mb-3">
                                <label for="addedItemIamge" class="form-label">Image :</label>
                                <input type="file" class="form-control" id="addedItemImage" name="addedItemImage">
                            </div>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                    
                    <!--/////////////////////////////// END Of Add Product Section ///////////////////////////////-->
                </div>
            </div>
        </div>
    </div>

@endsection