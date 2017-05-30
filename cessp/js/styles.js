$(document).ready(function(){
			$('.academic_program').on('mouseover',function(){
				var id = $(this).attr('id');
				$('.'+id).css('display','block');
			});
			$('.academic_program').on('mouseout',function(){
				var id = $(this).attr('id');
				$('.'+id).css('display','none');
			});
			$('.container-check').on('mouseover',function(){
				$(this).css('display','block');
			});
			$('.container-check').on('mouseout',function(){
				$(this).css('display','none');
			});
            $('.navbar-toggle').on('click',function(){
                $('.tablet_dropdown_menu').toggle();
            });
            
		});