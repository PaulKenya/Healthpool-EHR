<!-- Scroll to Top Button-->  
			<a class="scroll-to-top rounded cl-white gredient-bg" href="#page-top">
			  <i class="ti-angle-double-up"></i>
			</a>

			<!-- Bootstrap core JavaScript-->
			<script src="{{asset('assets/plugins/jquery/jquery.min.js')}}"></script>
			<script src="{{asset('assets/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
			
			<!-- Core plugin JavaScript-->
			<script src="{{asset('assets/plugins/jquery-easing/jquery.easing.min.js')}}"></script>
			
			 <!-- Slick Slider Js -->
			<script src="{{asset('assets/plugins/slick-slider/slick.js')}}"></script>
			
			<!-- Slim Scroll -->
			<script src="{{asset('assets/plugins/slim-scroll/jquery.slimscroll.min.js')}}"></script>
			
			<!-- Angular Tooltip -->
			<script src="{{asset('assets/plugins/angular-tooltip/angular.js')}}"></script>
			<script src="{{asset('assets/plugins/angular-tooltip/angular-tooltips.js')}}"></script>
			<script src="{{asset('assets/plugins/angular-tooltip/index.js')}}}"></script>
			

			
			<!-- Custom scripts for all pages-->
			<script src="{{asset('assets/dist/js/glovia.js')}}"></script>
			<script src="{{asset('assets/dist/js/jQuery.style.switcher.js')}}"></script>
<!-- Custom Theme JavaScript -->
<script src="{{asset('assets/dist/js/custom/form-wizard.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/plugins/jquery-quicksearch/jquery.quicksearch.js')}}"></script>
<script src="{{asset('assets/plugins/select2/dist/js/select2.min.js')}}" type="text/javascript"></script>
{{--<link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/css/select2.min.css" rel="stylesheet" />--}}
{{--<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js"></script>--}}
<script>
    $(document).ready(function() {
        $('.multipleselect').select2();
    });


</script>
			<script>
				function openRightMenu() {
					document.getElementById("rightMenu").style.display = "block";
				}
				function closeRightMenu() {
					document.getElementById("rightMenu").style.display = "none";
				}
			</script>

			<script type="text/javascript">
				$(document).ready(function() {
					$('#styleOptions').styleSwitcher();
				});
			</script>
			<script>
			  $('.dropdown-toggle').dropdown()
			</script>
	  </div>
	  <!-- Wrapper -->
	</body>
</html>
