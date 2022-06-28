</div>
<!-- /.container -->

<!-- Footer -->
        <div class="jumbotron text-center" Style="background-color: white;">
            <div class="row">
                <div class="col-12">
                    <div id="graph"></div>
                </div>
            </div>
        </div>
        
<footer class="py-5 bg-dark">
    <div class="container">
        <div class="m-0 text-center text-white">
            Bryan Keihl - Maikel Matamoros - Hansel Araya<br/>
            © 2022 Expertos Travel Agency - Universidad de Costa Rica (UCR), IF7103
        </div>
    </div>
</footer>

<!-- Bootstrap core JavaScript -->
<script src="https://code.jquery.com/jquery-3.3.1.js"></script>
<script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.5.2/js/dataTables.buttons.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.5.2/js/buttons.bootstrap4.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.5.2/js/buttons.html5.min.js"></script>
<script src="https://cdn.datatables.net/responsive/2.2.3/js/dataTables.responsive.min.js"></script>
<script src="https://cdn.datatables.net/responsive/2.2.3/js/responsive.bootstrap4.min.js"></script>
<script src="public/js/bootstrap.bundle.min.js"></script>
<script>
    $("#btnLogin").click(function (event) {

        //Fetch form to apply custom Bootstrap validation
        var form = $("#formLogin")

        if (form[0].checkValidity() === false) {
            event.preventDefault()
            event.stopPropagation()
        }

        form.addClass('was-validated');
    });
</script>

</body>

</html>



