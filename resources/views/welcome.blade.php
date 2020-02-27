@include('template.header')

        <div class="flex-center position-ref full-height" style="margin-top: -180px;">
            <div class="content">
                <div class="title m-b-md">
                    Premier League
                </div>
                <div class="links">
                    <a onclick="/" >Statistic</a>
                    <a onclick="load_data()" id="get_data" >Get data</a>
                    <a onclick="destroy_data()" id="delete">Delete data</a><br>
                    <br>
                    <div id="loading">
                        <div class="spinner-grow text-primary" role="status">
                          <span class="sr-only">Loading...</span>
                        </div>
                        <div class="spinner-grow text-secondary" role="status">
                          <span class="sr-only">Loading...</span>
                        </div>
                        <div class="spinner-grow text-success" role="status">
                          <span class="sr-only">Loading...</span>
                        </div>
                        <div class="spinner-grow text-danger" role="status">
                          <span class="sr-only">Loading...</span>
                        </div>
                        <div class="spinner-grow text-warning" role="status">
                          <span class="sr-only">Loading...</span>
                        </div>
                        <div class="spinner-grow text-info" role="status">
                          <span class="sr-only">Loading...</span>
                        </div>
                        <div class="spinner-grow text-dark" role="status">
                          <span class="sr-only">Loading...</span>
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <div  style="width: 60%; padding-left: 370px;margin-top:-203px;margin-bottom: 100px;">
            <table id="table" class="display" align="center" style="width: 780px;">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>First name</th>
                        <th>Second name</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>ID</th>
                        <th>First name</th>
                        <th>Second name</th>
                        <th>Action</th>
                    </tr>
                </tfoot>
            </table>
        </div>    

@include('template.modal')
@include('template.footer')