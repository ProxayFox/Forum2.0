<script>
    $(document).ready(function () {
        $('#main_Profile').click(function () {
            $('#sectionLoader').load("layout/profile/profile.php");
        });
        $('#main_Board').click(function () {
            $('#sectionLoader').load("layout/board/mainBoard.php");
        });
        $('#main_Message').click(function () {
            $('#sectionLoader').load("layout/messages/channels.php");
        });

    });
</script>

<main class="text-center row h-100">
    <div class="row row-cols-1 row-cols-md-3 g-4" style="padding-left: 10%; padding-right: 10%;">

        <!-- Profile card -->
        <div class="col">
            <div class="card h-100">
                <div class="card-body">
                    <h5 class="card-title">Profile</h5>
                </div>
                <div class="card-footer">
                    <button class="btn btn-outline-primary" id="main_Profile" style="width: 100px; height: 30px;"></button>
                </div>
            </div>
        </div>

        <!-- Board card -->
        <div class="col">
            <div class="card h-100">
                <div class="card-body">
                    <h5 class="card-title">Main Image Board</h5>
                </div>
                <div class="card-footer">
                    <button class="btn btn-outline-primary" id="main_Board" style="width: 100px; height: 30px;"></button>
                </div>
            </div>
        </div>

        <!-- Message card -->
        <div class="col">
            <div class="card h-100">
                <div class="card-body">
                    <h5 class="card-title">Messages</h5>
                </div>
                <div class="card-footer">
                    <button class="btn btn-outline-primary" id="main_Message" style="width: 100px; height: 30px;"></button>
                </div>
            </div>
        </div>
    </div>
</main>