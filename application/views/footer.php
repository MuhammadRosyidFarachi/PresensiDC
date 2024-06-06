<footer class="w-full bg-gray-50 shadow rounded-lg fixed dark:bg-gray-800 mt-16 m-6 bottom-0 left-0">
<div class="footer-wrapper">
        <div class="w-full mx-auto max-w-screen-xl p-4 md:flex md:items-center md:justify-between">
            <span class="text-sm text-gray-500 sm:text-center dark:text-gray-400">© 2024 <a href="https://flowbite.com/" class="hover:underline">Data Center UIN Said</a></span>
            <ul class="flex flex-wrap items-center mt-3 text-sm font-medium text-gray-500 dark:text-gray-400 sm:mt-0">
                <li>
                    <a href="<?php echo base_url('Home/homepage'); ?>" class="hover:underline me-4 md:me-6">Homepage</a>
                </li>
                <li>
                    <a href="<?php echo base_url('Home/presensi'); ?>" class="hover:underline me-4 md:me-6">Presence</a>
                </li>
                <li>
                  <a href="<?php echo base_url('Home/about'); ?>" class="hover:underline me-4 md:me-6">About</a>
                </li>
                <li>
                  <a href="<?php echo base_url('Home/contact'); ?>" class="hover:underline">Contact</a>
                </li>
            </ul>
            </div>
            </div>
     </footer>
    <script>
  const scriptURL = 'https://script.google.com/macros/s/AKfycbxCl9xrLdbitMCL8KVa0zfOnDi7h192ggim5cJp2UGe614M1lXEwmwBjBa4M_LuHM8X0g/exec'
  const form = document.forms['presensi-dc']

  form.addEventListener('submit', e => {
    e.preventDefault()
    fetch(scriptURL, { method: 'POST', body: new FormData(form)})
      .then(response => console.log('Success!', response))
      .catch(error => console.error('Error!', error.message))
  })
</script>
  </body>
</html>