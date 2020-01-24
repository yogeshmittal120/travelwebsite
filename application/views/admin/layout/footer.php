<div class="clearfix"></div>
<!-- Footer -->
<footer class="site-footer">
    <div class="footer-inner bg-white">
        <div class="row">
            <div class="col-sm-6">
                Copyright &copy; <script>
                    document.write(new Date().getFullYear());
                </script> GennextIT
            </div>
            <div class="col-sm-6 text-right">
                Designed by <a href="http://www.gennextit.com/">GennextIT</a>
            </div>
        </div>
    </div>
</footer>
<!-- /.site-footer -->
</div>
</div>
<!-- /#right-panel -->



<!-- Date Picker -->
<script src="<?php echo base_url('assets/js/bootstrap-datepicker.js');?>"></script>
<!-- Scripts -->
<script src="https://cdn.jsdelivr.net/npm/jquery@2.2.4/dist/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.4/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/jquery-match-height@0.7.2/dist/jquery.matchHeight.min.js"></script>
<script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
<!-- <link href="//" rel="stylesheet" /> -->




<!-- show alert messages -->
<Script>
    <?php if (!empty($this->session->flashdata('success'))) { ?>        
        showAlert("<?php echo $this->session->flashdata('success'); ?>", 'success');
    <?php } ?>
    <?php if (!empty($this->session->flashdata('error'))) { ?>       
        showAlert("<?php echo $this->session->flashdata('error'); ?>", 'danger');
    <?php } ?>
</Script>


<!-- custom -->





<!-- <script src="https://cdn.jsdelivr.net/npm/select2@4.0.12/dist/js/select2.min.js"></script> -->
<script>
    const base_url = '<?php echo base_url() ?>';
</script>
</body>

</html>