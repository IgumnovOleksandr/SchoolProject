function showError1(container, errorMessage) {
    container.className = 'error';
    var msgElem = document.createElement('span');
    msgElem.className = "error-message1";
    msgElem.innerHTML = errorMessage;
    container.appendChild(msgElem);
}
function showError(container, errorMessage) {
    container.className = 'error';
    var msgElem = document.createElement('span');
    msgElem.className = "error-message";
    msgElem.innerHTML = errorMessage;
    container.appendChild(msgElem);
}
function resetError(container) {
    container.className = '';
    if(container.lastChild.className == "error-message" || container.lastChild.className == "error-message1" ) {
        container.removeChild(container.lastChild);
    }
}
function validation_auth(form){
    var login, pass, submit = 0;
    login = form.login.value;
    pass = form.pass.value;
    var elems = form.elements;
    resetError(elems.login.parentNode);
    if(login.trim() === ""){
        showError1(elems.login.parentNode, ' Вкажіть логін.');
        $(".login").attr("placeholder", "");
        submit++;
    }else if(login.length < 5 && login.length != 0){
        showError1(elems.login.parentNode, ' Логін менше 5 символів.');
        $(".login").attr("placeholder", "");
        document.getElementById("authorization_login").value = "";
        submit++;
    }else if(login.length > 15){
        showError1(elems.login.parentNode, ' Логін більше 15 символів.');
        $(".login").attr("placeholder", "");
        document.getElementById("authorization_login").value = "";
        submit++;
    }
    resetError(elems.pass.parentNode);
    if(pass.trim() == ""){
        showError1(elems.pass.parentNode, ' Вкажіть пароль.');
        $(".pass").attr("placeholder", "");
        submit++; 
    }else if(pass.length < 8){
        showError1(elems.pass.parentNode, 'Пароль менше 8 символів');
        $(".pass").attr("placeholder", "");
        document.getElementById("authorization_pass").value = "";
        submit++;
    }
        return false;
}
function validation_form(form) {
    var elems = form.elements,errors = 0;
    resetError(elems.reg_login.parentNode);
    if(!elems.reg_login.value) {
        showError(elems.reg_login.parentNode, ' Вкажіть логін.');
        errors++;
    }
    resetError(elems.reg_pass.parentNode);
    if(!elems.reg_pass.value) {
        showError(elems.reg_pass.parentNode, ' Вкажіть пароль.');
        errors++;
    } else if (elems.reg_pass.value.length < 8) {
        elems.reg_pass.value = '';
        showError(elems.reg_pass.parentNode, ' Пароль менше 8 символів.');
        errors++;
    }
    resetError(elems.reg_name.parentNode);
    if(!elems.reg_name.value) {
        showError(elems.reg_name.parentNode, " Вкажіть ім'я.");
        errors++;
    }
    resetError(elems.reg_surname.parentNode);
    if(!elems.reg_surname.value) {
        showError(elems.reg_surname.parentNode, ' Вкажіть прізвище.');
        errors++;
    }
    resetError(elems.reg_patronymic.parentNode);
    if(!elems.reg_patronymic.value) {
        showError(elems.reg_patronymic.parentNode, " Вкажіть як Вас по-батькові.");
        errors++;
    }
    if(errors > 0){
        return false;
    }else
        return true;
}
$(document).ready(function(){
    let error = false, firstError = null, secondError = null;
    $('.datepicker-here').datepicker({
        language: {
            days: ['Неділя','Понеділок','Вівторок','Середа','Четвер','П’ятниця','Субота'],
            daysShort: ['Нед','Пон','Вів','Сер','Чет','П’ят','Суб'],
            daysMin: ['Нд','Пн','Вт','Ср','Чт','Пт','Сб'],
            months: ['Січень','Лютий','Березень','Квітень','Травень','Червень','Липень','Серпень','Вересень','Жовтень','Листопад','Грудень'],
            monthsShort: ['Січ','Лют','Бер','Кві','Тра','Чер','Лип','Сер','Вер','Жов','Лис','Гру'],
            today: 'Сьогодні',
            clear: 'Очистити',
            dateFormat: 'yyyy.mm.dd',
            timeFormat: 'hh:ii',
            firstDay: 1
        }
    });
	$(".fancybox").fancybox();
    $(".write_review").fancybox();
    $(".top_information_block_send_message").fancybox();
    $(".add_activity_table_item_link").click(function(){
       $(".add_activity_form").fadeIn(300);
       $(".background_dark").fadeIn(300);
       $("body").css("overflow-y", "hidden");
    });
    $(".add_class_link").fancybox();
    if($(".edit_activity_form").is(":visible")){
        $(".background_dark").show();
        $("body").css("overflow-y", "hidden");
    }
    $(".grades_table tr").click(function(){
        $(".grades_table td:first-child").css("background-color", "white !important");
    });
	let scroll_st = 0, scroll_w = 0;
	let elem = $("body");
	let nav = $(".navigation_block");
	let nav_top = nav.offset();
	let gallery_image = $(".our_gallery_last_images");
	let gallery_image_top = gallery_image.offset();
    let news_item_count_images = $("#news_item_count_images").attr('tid');
    let gallery_count_images = $("#gallery_count_images").attr('tid');
    let teachers_count = $("#teachers_count").attr('tid');
    let progress_count = $("#progress_count").attr('tid');
    $(".news_item_gallery_list").css("height", (parseInt((news_item_count_images - 1) / 4) + 1) * 265);
    $(".our_full_gallery").css("height", (parseInt((gallery_count_images - 1) / 3) + 1) * 415);
    $(".our_teachers_list").css("height", (parseInt((teachers_count - 1) / 4) + 1) * 470);
    $(".our_progress_block_list").css("height", (parseInt((progress_count - 1) / 2) + 1) * 600);
    $('body,html').animate({scrollTop: top}, 750);
	$(".regestration_list li input").attr("autocomplete", "off");
    $(".profile_form li input").attr("autocomplete", "off");
	$(window).scroll(function(){
        let top = $(document).scrollTop();
            if(top < 495){
                $(".navigation_block").css({top: "490px", position: "absolute"});
                $(".navigation_block").css("margin-top", "5px");
            }else{
                $(".navigation_block").css({top: '0', position: "fixed"});
                $(".navigation_block").css("margin-top", "0");
            }
    });
    if(elem.length){
		$(document).scroll(function(){
			scroll_st = $(this).scrollTop();
            $(".grades_params").css("height", $("#grades_table_container").height());
			if(scroll_st > 400){
				$(".our_propositions_text").fadeIn(500);
			}else
				$(".our_propositions_text").fadeOut(500);
			if(scroll_st > 550){
				$(".our_propositions_list .our_propositions_list_first_element").fadeIn(500);
			}else
				$(".our_propositions_list .our_propositions_list_first_element").fadeOut(300);
			if(scroll_st > 600){
				$(".our_propositions_list .our_propositions_list_second_element").fadeIn(500);
			}else
				$(".our_propositions_list .our_propositions_list_second_element").fadeOut(300);
			if(scroll_st > 650){
				$(".our_propositions_list .our_propositions_list_third_element").fadeIn(500);
			}else
				$(".our_propositions_list .our_propositions_list_third_element").fadeOut(300);
			
		});
	}
	$(".top_information_block_contacts").click(function (event) {
        event.preventDefault();
        let id  = $(this).attr('href'),
            top = $(id).offset().top;
        $('body,html').animate({scrollTop: top}, 750);
    });
    $(".authorization_button").click(function(){
    	$(".background_dark").fadeIn(200);
    	$("body").css("overflow-y", "hidden");
    	$(".authorization_form").fadeIn(200);
    });
    $(".write_review").click(function(){
        $(".review_form").fadeIn(200);
    });
    $(".close_edit_form, .background_dark").click(function(){
        $(".background_dark").hide();
        $(".edit_activity_form").hide();
        $(".add_activity_form").hide();
        let elem = $(".activities_block_title:nth-child(2)").attr("class_id");
        location.href = "activities.php?class_id="+elem;
    });
    $(".close_add_form").click(function(){
        $(".add_activity_form").hide();
        $(".background_dark").hide();
        $("body").css("overflow-y", "visible");
    });
    $(".background_dark, .close_authorization_form").click(function(){
    	$(".background_dark").fadeOut(200);
    	$("body").css("overflow-y", "visible");
    	$(".authorization_form").fadeOut(200);
    	$(".error-message").fadeOut();
    	$(".error-message1").fadeOut();
        $(".review_form").fadeOut(200);
        $(".authorization_form").css("height", "350px");
        $(".login").attr("placeholder", "Логін або E-mail");
        $(".pass").attr("placeholder", "Пароль");
        $(".message_authorization_error").hide();
    	$(".authorization_form_list ul li input").css("border", "none !important");
        document.getElementById("authorization_pass").value = "";
        document.getElementById("authorization_login").value = "";
    });
    $(".regestration_list li").click(function(){
    	$(".error-message").hide();
    });
    $(".list_item_login").click(function(){
        $(".login").focus();
        $(".error-message1").hide();
        $(".login").attr("placeholder", "Логін або E-mail");
        $(".pass").attr("placeholder", "Пароль");
    });
    $(".list_item_pass").click(function(){
        $(".pass").focus();
        $(".error-message1").hide();
        $(".login").attr("placeholder", "Логін або E-mail");
        $(".pass").attr("placeholder", "Пароль"); 
    });
    $(".select_links").click(function(){
        if(!($(".list_links_sort").is(":visible")))
            $(".list_links_sort").slideDown(300);
    });
    $(document).mouseup(function (e){
        let div = $(".list_links_sort"); 
        let grade_table = $(".grades_table");
        if (!div.is(e.target)
            && div.has(e.target).length === 0) { 
            div.slideUp(300);
        }
        if (!grade_table.is(e.target)
            && grade_table.has(e.target).length === 0) { 
            $(this).closest('table').removeClass('hovered');
        }
    });
    $(".grades_table td").hover(function(){
        let currentTable = $(this).closest('table');
        let index = $(this).index();
        currentTable.find('td').removeClass('hovered');
        $(document).mouseout(function (e){ 
            let grade_table = $(".grades_table tbody");
            if (!grade_table.is(e.target)
                && grade_table.has(e.target).length === 0) { 
                currentTable.find('td').removeClass('hovered');
            }
        });
        $(".grades_table th").hover(function(){
            currentTable.find('td').removeClass('hovered');
        });
        currentTable.find('tr').each(function(){
            $(this).find('td').eq(index).addClass('hovered');
            $(this).find('td:first-child').eq(index).removeClass("hovered");
        });
    });
    $(".grades_table tr").hover(function(){
        $(".grades_table td:first-child").addClass("not_hovered");
    });
    $(".authorization_form_button").click(function(){
        var auth_login = $("#authorization_login").val();
        var auth_pass = $("#authorization_pass").val();            
        $(".authorization_form_button").hide();
        $(".message_authorization_error").hide();
        $(".loading").show();
        $.ajax({
            type: "POST",
            url: "/include/auth.php",
            data: "login="+auth_login+"&pass="+auth_pass,
            dataType: "html",
            cache: false,
            success: function(data){
                if (data == true){
                    location.reload();
                }else{
                    $(".message_authorization_error").show(400);
                    $(".loading").hide();
                    $(".authorization_form_button").show();
                    if(!($(".error-message1").is(":visible"))){
                        $(".login").attr("placeholder", "Логін або E-mail");
                        $(".pass").attr("placeholder", "Пароль");
                    }
                    document.getElementById("authorization_pass").value = "";
                    document.getElementById("authorization_login").value = "";
                }
            }
        });  
    });
    let showError = setInterval(function(){
        if(error == true){
            if(firstError != null){
                let authInputsBlock = document.getElementsByClassName("auth_inputs")[0];
                let firstErrorP = document.createElement("p");
                authInputsBlock.appendChild(firstErrorP);
                firstErrorP.innerHTML = firstError;
                firstErrorP.classList.add("error_message1");
                firstErrorP.style.top = "<16></16>px";
            }
            if(secondError != null){
                let authInputsBlock = document.getElementsByClassName("auth_inputs")[0];
                let secondErrorP = document.createElement("p");
                authInputsBlock.appendChild(secondErrorP);
                secondErrorP.innerHTML = secondError;
                secondErrorP.classList.add("error_message1");
                secondErrorP.style.top = "71px";
            }
            clearInterval(showError);
            error = false;
        }
    });
    $(".send_message_button").click(function(){
        let author = $(".send_message_author").val();
        let user_id = $(".send_message_author").attr("user_id");
        let text = $(".send_message_text").val();
        $.ajax({
            type: "POST",
            url: "/include/send_message.php",
            data: "author="+author+"&user_id="+user_id+"&text="+text,
            dataType: "html",
            cache: false,
            success: function(data){
                if(data == true){
                    location.reload();
                    $(".send_message_form_success").css("display", "block");
                }else{
                    $(".send_message_form_error").css("display", "block");
                }
            }
        });
        return false;
    });
    $(".logout").click(function(){
        $.ajax({
            type: "POST",
            url: "/include/logout.php",
            dataType: "html",
            cache: false,
            success: function(data){
                if(data == 'logout'){
                    location.reload();
                }
            }
        });
    });
    $(".navbar-button").click(function(){
        $(".navbar-toggler").animate({ width: "toggle" }, 200);
    });
    $(".close-navbar-toggler").click(function(){
        $(".navbar-toggler").animate({ width: "toggle" }, 200);
    });
    $(document).mouseover(function (e){ 
        let menu = $(".navbar-toggler");
            if(!menu.is(e.target) && menu.has(e.target).length === 0) {
                if($(".navbar-toggler").is(":visible")){ 
                    menu.animate({ width: "toggle" }, 200);
                }
            }
    });
});