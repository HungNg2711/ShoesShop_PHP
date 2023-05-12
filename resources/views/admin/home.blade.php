@extends('admin.main')
@section('content')
        <!-- Main content -->
        <div class="container-fluid">
          <div class="row">
            <div class="col-12">
              
                <div class="card-body">
                  <div>
                    <div class="btn-group w-100 mb-2">
                      <a class="btn btn-info active" href="javascript:void(0)" data-filter="all"> All SNEAKERS </a>
                      <a class="btn btn-info" href="javascript:void(0)" data-filter="1"> NIKE </a>
                      <a class="btn btn-info" href="javascript:void(0)" data-filter="2"> ADIDAS </a>
                      <a class="btn btn-info" href="javascript:void(0)" data-filter="3"> NEW BALANCE </a>
                      
                    </div>
                    <div class="mb-2">
                      <a class="btn btn-secondary" href="javascript:void(0)" data-shuffle> NIKE </a>
                      <div class="float-right">
                        <select class="custom-select" style="width: auto;" data-sortOrder>
                          <option value="index"> Sort by Size </option>
                          <option value="sortData"> Sort by Cost </option>
                        </select>
                        <div class="btn-group">
                          <a class="btn btn-default" href="javascript:void(0)" data-sortAsc> Ascending </a>
                          <a class="btn btn-default" href="javascript:void(0)" data-sortDesc> Descending </a>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div>
                    <div class="filter-container p-0 row">
                      <div class="filtr-item col-sm-2" data-category="1" data-sort="white sample">
                        <a href="admin/menus/add" data-toggle="lightbox" data-title="sample 1 - white">
                          <img src="https://static.nike.com/a/images/c_limit,w_592,f_auto/t_product_v1/54a510de-a406-41b2-8d62-7f8c587c9a7e/air-force-1-07-lv8-shoes-9KwrSk.png" class="img-fluid mb-2" alt="white sample"/>
                        </a>
                      </div>
                      <div class="filtr-item col-sm-2" data-category="2, 4" data-sort="black sample">
                        <a href="admin/menus/detail" data-toggle="lightbox" data-title="sample 2 - black">
                          <img src="https://static.nike.com/a/images/c_limit,w_592,f_auto/t_product_v1/91397f06-dc7f-49a4-90f3-0abf0a3c2884/air-max-97-shoes-EBZrb8.png" class="img-fluid mb-2" alt="black sample"/>
                        </a>
                      </div>
                      <div class="filtr-item col-sm-2" data-category="3, 4" data-sort="red sample">
                        <a href="https://static.nike.com/a/images/c_limit,w_592,f_auto/t_product_v1/8a73f26b-b258-4681-8907-bf9deee2fe23/dunk-high-retro-se-shoes-ZgKR1S.png" data-toggle="lightbox" data-title="sample 3 - red">
                          <img src="https://static.nike.com/a/images/c_limit,w_592,f_auto/t_product_v1/8a73f26b-b258-4681-8907-bf9deee2fe23/dunk-high-retro-se-shoes-ZgKR1S.png" class="img-fluid mb-2" alt="red sample"/>
                        </a>
                      </div>
                      <div class="filtr-item col-sm-2" data-category="3, 4" data-sort="red sample">
                        <a href="https://static.nike.com/a/images/c_limit,w_592,f_auto/t_product_v1/e6da41fa-1be4-4ce5-b89c-22be4f1f02d4/air-force-1-07-shoes-WrLlWX.png" data-toggle="lightbox" data-title="sample 4 - red">
                          <img src="https://static.nike.com/a/images/c_limit,w_592,f_auto/t_product_v1/e6da41fa-1be4-4ce5-b89c-22be4f1f02d4/air-force-1-07-shoes-WrLlWX.png" class="img-fluid mb-2" alt="red sample"/>
                        </a>
                      </div>
                      <div class="filtr-item col-sm-2" data-category="3, 4" data-sort="red sample">
                        <a href="https://static.nike.com/a/images/c_limit,w_592,f_auto/t_product_v1/f47c90ea-a705-464d-b8ae-61bfc621713f/air-max-ltd-3-shoe-3X870s.png" data-toggle="lightbox" data-title="sample 4 - red">
                          <img src="https://static.nike.com/a/images/c_limit,w_592,f_auto/t_product_v1/f47c90ea-a705-464d-b8ae-61bfc621713f/air-max-ltd-3-shoe-3X870s.png" class="img-fluid mb-2" alt="red sample"/>
                        </a>
                      </div><div class="filtr-item col-sm-2" data-category="3, 4" data-sort="red sample">
                        <a href="https://static.nike.com/a/images/c_limit,w_592,f_auto/t_product_v1/fd17b420-b388-4c8a-aaaa-e0a98ddf175f/dunk-high-retro-shoe-DdRmMZ.png" data-toggle="lightbox" data-title="sample 4 - red">
                          <img src="https://static.nike.com/a/images/c_limit,w_592,f_auto/t_product_v1/fd17b420-b388-4c8a-aaaa-e0a98ddf175f/dunk-high-retro-shoe-DdRmMZ.png" class="img-fluid mb-2" alt="red sample"/>
                        </a>
                      </div>
                    </div>
                  </div>
  
                </div>
              </div>
            </div>
            <div class="col-12">
              <div class="card card-primary">
                <div class="card-header">
                  <h4 class="card-title">DANH SÁCH GIÀY SẮP RELEASE</h4>
                </div>
                <div class="card-body">
                  <div class="row">
                    <div class="col-sm-2">
                      <a href="https://static.nike.com/a/images/c_limit,w_592,f_auto/t_product_v1/8d5a336c-ea74-4ed6-9fbf-6467ff671971/blazer-low-77-jumbo-shoes-rHhr2x.png" data-toggle="lightbox" data-title="sample 1 - white" data-gallery="gallery">
                        <img src="https://static.nike.com/a/images/c_limit,w_592,f_auto/t_product_v1/8d5a336c-ea74-4ed6-9fbf-6467ff671971/blazer-low-77-jumbo-shoes-rHhr2x.png" class="img-fluid mb-2" alt="white sample"/>
                      </a>
                    </div>
                    <div class="col-sm-2">
                      <a href="https://static.nike.com/a/images/c_limit,w_592,f_auto/t_product_v1/ca25d17d-7256-4742-9145-a53c90671d35/air-force-1-07-lv8-shoes-03fZMc.png" data-toggle="lightbox" data-title="sample 2 - black" data-gallery="gallery">
                        <img src="https://static.nike.com/a/images/c_limit,w_592,f_auto/t_product_v1/ca25d17d-7256-4742-9145-a53c90671d35/air-force-1-07-lv8-shoes-03fZMc.png" class="img-fluid mb-2" alt="black sample"/>
                      </a>
                    </div>
                    <div class="col-sm-2">
                      <a href="https://static.nike.com/a/images/c_limit,w_592,f_auto/t_product_v1/046a2ceb-2b47-4583-a81f-ad9b2cb2fe5c/dunk-hi-retro-shoes-WVg5bq.png" data-toggle="lightbox" data-title="sample 3 - red" data-gallery="gallery">
                        <img src="https://static.nike.com/a/images/c_limit,w_592,f_auto/t_product_v1/046a2ceb-2b47-4583-a81f-ad9b2cb2fe5c/dunk-hi-retro-shoes-WVg5bq.png" class="img-fluid mb-2" alt="red sample"/>
                      </a>
                    </div>
                    <div class="col-sm-2">
                      <a href="https://static.nike.com/a/images/c_limit,w_592,f_auto/t_product_v1/2ed73ce2-b0d0-4806-bb97-0981a8977369/air-max-270-shoes-g3G7Fd.png" data-toggle="lightbox" data-title="sample 4 - red" data-gallery="gallery">
                        <img src="https://static.nike.com/a/images/c_limit,w_592,f_auto/t_product_v1/2ed73ce2-b0d0-4806-bb97-0981a8977369/air-max-270-shoes-g3G7Fd.png" class="img-fluid mb-2" alt="red sample"/>
                      </a>
                    </div>
                    <div class="col-sm-2">
                      <a href="https://static.nike.com/a/images/c_limit,w_592,f_auto/t_product_v1/c4c0b117-77ad-4ab5-980f-37754de8339e/air-max-90-shoes-kRsBnD.png" data-toggle="lightbox" data-title="sample 5 - black" data-gallery="gallery">
                        <img src="https://static.nike.com/a/images/c_limit,w_592,f_auto/t_product_v1/c4c0b117-77ad-4ab5-980f-37754de8339e/air-max-90-shoes-kRsBnD.png" class="img-fluid mb-2" alt="black sample"/>
                      </a>
                    </div>
                    <div class="col-sm-2">
                      <a href="https://static.nike.com/a/images/c_limit,w_592,f_auto/t_product_v1/4629f759-242f-4709-95f0-066fecf999c8/court-vision-low-shoes-3JRH8h.png" data-toggle="lightbox" data-title="sample 6 - white" data-gallery="gallery">
                        <img src="https://static.nike.com/a/images/c_limit,w_592,f_auto/t_product_v1/4629f759-242f-4709-95f0-066fecf999c8/court-vision-low-shoes-3JRH8h.png" class="img-fluid mb-2" alt="white sample"/>
                      </a>
                    </div>
                    
                      
                    
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div><!-- /.container-fluid -->
      
@endsection