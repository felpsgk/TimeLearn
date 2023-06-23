<!-- Footer-->
<footer class="bg-white py-4 mt-auto">
    <div class="container px-5">
        <div class="row align-items-center justify-content-between flex-column flex-sm-row">
            <div class="col-auto">
                <div class="small m-0">Copyright &copy;FELPSTI 2023</div>
            </div>
            <div class="col-auto">
                <a class="small" href="#!">Privacy</a>
                <span class="mx-1">&middot;</span>
                <a class="small" href="#!">Terms</a>
                <span class="mx-1">&middot;</span>
                <a class="small" href="#!">Contact</a>
            </div>
        </div>
    </div>
</footer>
<!--CONTA CARACTERES RESTANTES-->
<script>
    $(document).on("input", "#descTopico", function() {
        var textarea = document.getElementById("myTextarea");
        var limite = 512;
        var caracteresDigitados = $(this).val().length;
        var caracteresRestantes = limite - caracteresDigitados;
        $(".caracteresDesc").text(caracteresRestantes);
        console.log($(this).height.toString);
        console.log($(this).scrollHeight.toString);
        $(this).style.height = "auto";
        textarea.style.height = textarea.scrollHeight + "px";
        console.log($(this).height.toString);
        console.log($(this).scrollHeight.toString);
    });
</script>
<!-- Bootstrap core JS-->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
<!-- Core theme JS-->
<script src="js/scripts.js"></script>