<!-- Footer container is started  -->


<footer id="footer" >
    <p class="h-secondry row">Copyright &copy; HamaraCollege@2022 | All right reserved</p>
</footer>

    <script>
        let burger = document.querySelector('.burger');
        let line = document.querySelectorAll('.line');
        let nav = document.getElementById('nav');
        let navlist = document.getElementById('navlist');

        burger.addEventListener('click', handleNav);

        function handleNav(e) {
            if ( nav.style.height == '34%') {
            // console.log('this is if oe ssrweclick on ');

                nav.style.height = '80px';
                navlist.style.display = 'none';

            }
            else{
            // console.log('this is click on ');

                nav.style.height = '34%';
                navlist.style.display = 'block';
            }

        }
    </script>
    <?php
echo $script;

?>
</body>

</html>