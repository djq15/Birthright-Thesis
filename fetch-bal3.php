<?php
	// empty search, tuition filter
	if(isset($_POST["submit"]) and $_POST["DoesNotMatter1"] == "N" and $_POST["DoesNotMatter2"] == "tuition")
	
	{

	$search = $_POST["search_text"];
	$searchz = $_POST["search_textz"];
	$searchx = $_POST["search_textx"];
	
	if ($searchz != "" and $searchx != "") {
	$results = "
	SELECT student_id, first_name, last_name, month1, month2, month3, month4, month5, month6, month7, month8, month9, total_tuition, downpayment, total_payment, balance, monthly_payment, late_payer, fully_paid, tag, user_id FROM birthright_db.accounts, birthright_db.login where user_id = student_id and verified='1' and tag = '2'
	";
	}
	else if ($searchx == "") {
	$results = "
	SELECT student_id, first_name, last_name, month1, month2, month3, month4, month5, month6, month7, month8, month9, total_tuition, downpayment, total_payment, balance, monthly_payment, late_payer, fully_paid, tag, user_id FROM birthright_db.accounts, birthright_db.login where user_id = student_id and verified='1' and tag = '2'
	and total_tuition >= '".$searchz."'
	";
	}
	else if ($searchz == "") {
	$results = "
	SELECT student_id, first_name, last_name, month1, month2, month3, month4, month5, month6, month7, month8, month9, total_tuition, downpayment, total_payment, balance, monthly_payment, late_payer, fully_paid, tag, user_id FROM birthright_db.accounts, birthright_db.login where user_id = student_id and verified='1' and tag = '2'
	and total_tuition <= '".$searchx."'
	";
	}
	}
	// empty search, tuition filter

	// empty search, downpayment filter
	else if(isset($_POST["submit"]) and $_POST["DoesNotMatter1"] == "N" and $_POST["DoesNotMatter2"] == "downpayment")
	
	{

	$search = $_POST["search_text"];
	$searchz = $_POST["search_textz"];
	$searchx = $_POST["search_textx"];
	
	if ($searchz != "" and $searchx != "") {
	$results = "
	SELECT student_id, first_name, last_name, month1, month2, month3, month4, month5, month6, month7, month8, month9, total_tuition, downpayment, total_payment, balance, monthly_payment, late_payer, fully_paid, tag, user_id FROM birthright_db.accounts, birthright_db.login where user_id = student_id and verified='1' and tag = '2'
	and downpayment >= '".$searchz."' and downpayment <= '".$searchx."'
	";
	}
	else if ($searchx == "") {
	$results = "
	SELECT student_id, first_name, last_name, month1, month2, month3, month4, month5, month6, month7, month8, month9, total_tuition, downpayment, total_payment, balance, monthly_payment, late_payer, fully_paid, tag, user_id FROM birthright_db.accounts, birthright_db.login where user_id = student_id and verified='1' and tag = '2'
	and downpayment >= '".$searchz."'
	";
	}
	else if ($searchz == "") {
	$results = "
	SELECT student_id, first_name, last_name, month1, month2, month3, month4, month5, month6, month7, month8, month9, total_tuition, downpayment, total_payment, balance, monthly_payment, late_payer, fully_paid, tag, user_id FROM birthright_db.accounts, birthright_db.login where user_id = student_id and verified='1' and tag = '2'
	and downpayment <= '".$searchx."'
	";
	}
	}
	// empty search, downpayment filter
	
	// empty search, month1 filter
	else if(isset($_POST["submit"]) and $_POST["DoesNotMatter1"] == "N" and $_POST["DoesNotMatter2"] == "month1")
	
	{

	$search = $_POST["search_text"];
	$searchz = $_POST["search_textz"];
	$searchx = $_POST["search_textx"];
	
	if ($searchz != "" and $searchx != "") {
	$results = "
	SELECT student_id, first_name, last_name, month1, month2, month3, month4, month5, month6, month7, month8, month9, total_tuition, downpayment, total_payment, balance, monthly_payment, late_payer, fully_paid, tag, user_id FROM birthright_db.accounts, birthright_db.login where user_id = student_id and verified='1' and tag = '2'
	and month1 >= '".$searchz."' and month1 <= '".$searchx."'
	";
	}
	else if ($searchx == "") {
	$results = "
	SELECT student_id, first_name, last_name, month1, month2, month3, month4, month5, month6, month7, month8, month9, total_tuition, downpayment, total_payment, balance, monthly_payment, late_payer, fully_paid, tag, user_id FROM birthright_db.accounts, birthright_db.login where user_id = student_id and verified='1' and tag = '2'
	and month1 >= '".$searchz."'
	";
	}
	else if ($searchz == "") {
	$results = "
	SELECT student_id, first_name, last_name, month1, month2, month3, month4, month5, month6, month7, month8, month9, total_tuition, downpayment, total_payment, balance, monthly_payment, late_payer, fully_paid, tag, user_id FROM birthright_db.accounts, birthright_db.login where user_id = student_id and verified='1' and tag = '2'
	and month1 <= '".$searchx."'
	";
	}
	}
	// empty search, month1 filter
	
	
	// empty search, month2 filter
	else if(isset($_POST["submit"]) and $_POST["DoesNotMatter1"] == "N" and $_POST["DoesNotMatter2"] == "month2")
	
	{

	$search = $_POST["search_text"];
	$searchz = $_POST["search_textz"];
	$searchx = $_POST["search_textx"];
	
	if ($searchz != "" and $searchx != "") {
	$results = "
	SELECT student_id, first_name, last_name, month1, month2, month3, month4, month5, month6, month7, month8, month9, total_tuition, downpayment, total_payment, balance, monthly_payment, late_payer, fully_paid, tag, user_id FROM birthright_db.accounts, birthright_db.login where user_id = student_id and verified='1' and tag = '2'
	and month2 >= '".$searchz."' and month2 <= '".$searchx."'
	";
	}
	else if ($searchx == "") {
	$results = "
	SELECT student_id, first_name, last_name, month1, month2, month3, month4, month5, month6, month7, month8, month9, total_tuition, downpayment, total_payment, balance, monthly_payment, late_payer, fully_paid, tag, user_id FROM birthright_db.accounts, birthright_db.login where user_id = student_id and verified='1' and tag = '2'
	and month2 >= '".$searchz."'
	";
	}
	else if ($searchz == "") {
	$results = "
	SELECT student_id, first_name, last_name, month1, month2, month3, month4, month5, month6, month7, month8, month9, total_tuition, downpayment, total_payment, balance, monthly_payment, late_payer, fully_paid, tag, user_id FROM birthright_db.accounts, birthright_db.login where user_id = student_id and verified='1' and tag = '2'
	and month2 <= '".$searchx."'
	";
	}
	}
	// empty search, month2 filter
	
	
	// empty search, month3 filter
	else if(isset($_POST["submit"]) and $_POST["DoesNotMatter1"] == "N" and $_POST["DoesNotMatter2"] == "month3")
	
	{

	$search = $_POST["search_text"];
	$searchz = $_POST["search_textz"];
	$searchx = $_POST["search_textx"];
	
	if ($searchz != "" and $searchx != "") {
	$results = "
	SELECT student_id, first_name, last_name, month1, month2, month3, month4, month5, month6, month7, month8, month9, total_tuition, downpayment, total_payment, balance, monthly_payment, late_payer, fully_paid, tag, user_id FROM birthright_db.accounts, birthright_db.login where user_id = student_id and verified='1' and tag = '2'
	and month3 >= '".$searchz."' and month3 <= '".$searchx."'
	";
	}
	else if ($searchx == "") {
	$results = "
	SELECT student_id, first_name, last_name, month1, month2, month3, month4, month5, month6, month7, month8, month9, total_tuition, downpayment, total_payment, balance, monthly_payment, late_payer, fully_paid, tag, user_id FROM birthright_db.accounts, birthright_db.login where user_id = student_id and verified='1' and tag = '2'
	and month3 >= '".$searchz."'
	";
	}
	else if ($searchz == "") {
	$results = "
	SELECT student_id, first_name, last_name, month1, month2, month3, month4, month5, month6, month7, month8, month9, total_tuition, downpayment, total_payment, balance, monthly_payment, late_payer, fully_paid, tag, user_id FROM birthright_db.accounts, birthright_db.login where user_id = student_id and verified='1' and tag = '2'
	and month3 <= '".$searchx."'
	";
	}
	}
	// empty search, month3 filter
	
	// empty search, month4 filter
	else if(isset($_POST["submit"]) and $_POST["DoesNotMatter1"] == "N" and $_POST["DoesNotMatter2"] == "month4")
	
	{

	$search = $_POST["search_text"];
	$searchz = $_POST["search_textz"];
	$searchx = $_POST["search_textx"];
	
	if ($searchz != "" and $searchx != "") {
	$results = "
	SELECT student_id, first_name, last_name, month1, month2, month3, month4, month5, month6, month7, month8, month9, total_tuition, downpayment, total_payment, balance, monthly_payment, late_payer, fully_paid, tag, user_id FROM birthright_db.accounts, birthright_db.login where user_id = student_id and verified='1' and tag = '2'
	and month4 >= '".$searchz."' and month4 <= '".$searchx."'
	";
	}
	else if ($searchx == "") {
	$results = "
	SELECT student_id, first_name, last_name, month1, month2, month3, month4, month5, month6, month7, month8, month9, total_tuition, downpayment, total_payment, balance, monthly_payment, late_payer, fully_paid, tag, user_id FROM birthright_db.accounts, birthright_db.login where user_id = student_id and verified='1' and tag = '2'
	and month4 >= '".$searchz."'
	";
	}
	else if ($searchz == "") {
	$results = "
	SELECT student_id, first_name, last_name, month1, month2, month3, month4, month5, month6, month7, month8, month9, total_tuition, downpayment, total_payment, balance, monthly_payment, late_payer, fully_paid, tag, user_id FROM birthright_db.accounts, birthright_db.login where user_id = student_id and verified='1' and tag = '2'
	and month4 <= '".$searchx."'
	";
	}
	}
	// empty search, month4 filter
	
	// empty search, month5 filter
	else if(isset($_POST["submit"]) and $_POST["DoesNotMatter1"] == "N" and $_POST["DoesNotMatter2"] == "month5")
	
	{

	$search = $_POST["search_text"];
	$searchz = $_POST["search_textz"];
	$searchx = $_POST["search_textx"];
	
	if ($searchz != "" and $searchx != "") {
	$results = "
	SELECT student_id, first_name, last_name, month1, month2, month3, month4, month5, month6, month7, month8, month9, total_tuition, downpayment, total_payment, balance, monthly_payment, late_payer, fully_paid, tag, user_id FROM birthright_db.accounts, birthright_db.login where user_id = student_id and verified='1' and tag = '2'
	and month5 >= '".$searchz."' and month5 <= '".$searchx."'
	";
	}
	else if ($searchx == "") {
	$results = "
	SELECT student_id, first_name, last_name, month1, month2, month3, month4, month5, month6, month7, month8, month9, total_tuition, downpayment, total_payment, balance, monthly_payment, late_payer, fully_paid, tag, user_id FROM birthright_db.accounts, birthright_db.login where user_id = student_id and verified='1' and tag = '2'
	and month5 >= '".$searchz."'
	";
	}
	else if ($searchz == "") {
	$results = "
	SELECT student_id, first_name, last_name, month1, month2, month3, month4, month5, month6, month7, month8, month9, total_tuition, downpayment, total_payment, balance, monthly_payment, late_payer, fully_paid, tag, user_id FROM birthright_db.accounts, birthright_db.login where user_id = student_id and verified='1' and tag = '2'
	and month5 <= '".$searchx."'
	";
	}
	}
	// empty search, month5 filter
	
	// empty search, month6 filter
	else if(isset($_POST["submit"]) and $_POST["DoesNotMatter1"] == "N" and $_POST["DoesNotMatter2"] == "month6")
	
	{

	$search = $_POST["search_text"];
	$searchz = $_POST["search_textz"];
	$searchx = $_POST["search_textx"];
	
	if ($searchz != "" and $searchx != "") {
	$results = "
	SELECT student_id, first_name, last_name, month1, month2, month3, month4, month5, month6, month7, month8, month9, total_tuition, downpayment, total_payment, balance, monthly_payment, late_payer, fully_paid, tag, user_id FROM birthright_db.accounts, birthright_db.login where user_id = student_id and verified='1' and tag = '2'
	and month6 >= '".$searchz."' and month6 <= '".$searchx."'
	";
	}
	else if ($searchx == "") {
	$results = "
	SELECT student_id, first_name, last_name, month1, month2, month3, month4, month5, month6, month7, month8, month9, total_tuition, downpayment, total_payment, balance, monthly_payment, late_payer, fully_paid, tag, user_id FROM birthright_db.accounts, birthright_db.login where user_id = student_id and verified='1' and tag = '2'
	and month6 >= '".$searchz."'
	";
	}
	else if ($searchz == "") {
	$results = "
	SELECT student_id, first_name, last_name, month1, month2, month3, month4, month5, month6, month7, month8, month9, total_tuition, downpayment, total_payment, balance, monthly_payment, late_payer, fully_paid, tag, user_id FROM birthright_db.accounts, birthright_db.login where user_id = student_id and verified='1' and tag = '2'
	and month6 <= '".$searchx."'
	";
	}
	}
	// empty search, month6 filter
	
	// empty search, month7 filter
	else if(isset($_POST["submit"]) and $_POST["DoesNotMatter1"] == "N" and $_POST["DoesNotMatter2"] == "month7")
	
	{

	$search = $_POST["search_text"];
	$searchz = $_POST["search_textz"];
	$searchx = $_POST["search_textx"];
	
	if ($searchz != "" and $searchx != "") {
	$results = "
	SELECT student_id, first_name, last_name, month1, month2, month3, month4, month5, month6, month7, month8, month9, total_tuition, downpayment, total_payment, balance, monthly_payment, late_payer, fully_paid, tag, user_id FROM birthright_db.accounts, birthright_db.login where user_id = student_id and verified='1' and tag = '2'
	and month7 >= '".$searchz."' and month7 <= '".$searchx."'
	";
	}
	else if ($searchx == "") {
	$results = "
	SELECT student_id, first_name, last_name, month1, month2, month3, month4, month5, month6, month7, month8, month9, total_tuition, downpayment, total_payment, balance, monthly_payment, late_payer, fully_paid, tag, user_id FROM birthright_db.accounts, birthright_db.login where user_id = student_id and verified='1' and tag = '2'
	and month7 >= '".$searchz."'
	";
	}
	else if ($searchz == "") {
	$results = "
	SELECT student_id, first_name, last_name, month1, month2, month3, month4, month5, month6, month7, month8, month9, total_tuition, downpayment, total_payment, balance, monthly_payment, late_payer, fully_paid, tag, user_id FROM birthright_db.accounts, birthright_db.login where user_id = student_id and verified='1' and tag = '2'
	and month7 <= '".$searchx."'
	";
	}
	}
	// empty search, month7 filter
	
	// empty search, month8 filter
	else if(isset($_POST["submit"]) and $_POST["DoesNotMatter1"] == "N" and $_POST["DoesNotMatter2"] == "month8")
	
	{

	$search = $_POST["search_text"];
	$searchz = $_POST["search_textz"];
	$searchx = $_POST["search_textx"];
	
	if ($searchz != "" and $searchx != "") {
	$results = "
	SELECT student_id, first_name, last_name, month1, month2, month3, month4, month5, month6, month7, month8, month9, total_tuition, downpayment, total_payment, balance, monthly_payment, late_payer, fully_paid, tag, user_id FROM birthright_db.accounts, birthright_db.login where user_id = student_id and verified='1' and tag = '2'
	and month8 >= '".$searchz."' and month8 <= '".$searchx."'
	";
	}
	else if ($searchx == "") {
	$results = "
	SELECT student_id, first_name, last_name, month1, month2, month3, month4, month5, month6, month7, month8, month9, total_tuition, downpayment, total_payment, balance, monthly_payment, late_payer, fully_paid, tag, user_id FROM birthright_db.accounts, birthright_db.login where user_id = student_id and verified='1' and tag = '2'
	and month8 >= '".$searchz."'
	";
	}
	else if ($searchz == "") {
	$results = "
	SELECT student_id, first_name, last_name, month1, month2, month3, month4, month5, month6, month7, month8, month9, total_tuition, downpayment, total_payment, balance, monthly_payment, late_payer, fully_paid, tag, user_id FROM birthright_db.accounts, birthright_db.login where user_id = student_id and verified='1' and tag = '2'
	and month8 <= '".$searchx."'
	";
	}
	}
	// empty search, month8 filter
	
	// empty search, month9 filter
	else if(isset($_POST["submit"]) and $_POST["DoesNotMatter1"] == "N" and $_POST["DoesNotMatter2"] == "month9")
	
	{

	$search = $_POST["search_text"];
	$searchz = $_POST["search_textz"];
	$searchx = $_POST["search_textx"];
	
	if ($searchz != "" and $searchx != "") {
	$results = "
	SELECT student_id, first_name, last_name, month1, month2, month3, month4, month5, month6, month7, month8, month9, total_tuition, downpayment, total_payment, balance, monthly_payment, late_payer, fully_paid, tag, user_id FROM birthright_db.accounts, birthright_db.login where user_id = student_id and verified='1' and tag = '2'
	and month9 >= '".$searchz."' and month9 <= '".$searchx."'
	";
	}
	else if ($searchx == "") {
	$results = "
	SELECT student_id, first_name, last_name, month1, month2, month3, month4, month5, month6, month7, month8, month9, total_tuition, downpayment, total_payment, balance, monthly_payment, late_payer, fully_paid, tag, user_id FROM birthright_db.accounts, birthright_db.login where user_id = student_id and verified='1' and tag = '2'
	and month9 >= '".$searchz."'
	";
	}
	else if ($searchz == "") {
	$results = "
	SELECT student_id, first_name, last_name, month1, month2, month3, month4, month5, month6, month7, month8, month9, total_tuition, downpayment, total_payment, balance, monthly_payment, late_payer, fully_paid, tag, user_id FROM birthright_db.accounts, birthright_db.login where user_id = student_id and verified='1' and tag = '2'
	and month9 <= '".$searchx."'
	";
	}
	}
	// empty search, month9 filter
	
	// empty search, balance filter
	else if(isset($_POST["submit"]) and $_POST["DoesNotMatter1"] == "N" and $_POST["DoesNotMatter2"] == "balance")
	
	{

	$search = $_POST["search_text"];
	$searchz = $_POST["search_textz"];
	$searchx = $_POST["search_textx"];
	
	if ($searchz != "" and $searchx != "") {
	$results = "
	SELECT student_id, first_name, last_name, month1, month2, month3, month4, month5, month6, month7, month8, month9, total_tuition, downpayment, total_payment, balance, monthly_payment, late_payer, fully_paid, tag, user_id FROM birthright_db.accounts, birthright_db.login where user_id = student_id and verified='1' and tag = '2'
	and balance >= '".$searchz."' and balance <= '".$searchx."'
	";
	}
	else if ($searchx == "") {
	$results = "
	SELECT student_id, first_name, last_name, month1, month2, month3, month4, month5, month6, month7, month8, month9, total_tuition, downpayment, total_payment, balance, monthly_payment, late_payer, fully_paid, tag, user_id FROM birthright_db.accounts, birthright_db.login where user_id = student_id and verified='1' and tag = '2'
	and balance >= '".$searchz."'
	";
	}
	else if ($searchz == "") {
	$results = "
	SELECT student_id, first_name, last_name, month1, month2, month3, month4, month5, month6, month7, month8, month9, total_tuition, downpayment, total_payment, balance, monthly_payment, late_payer, fully_paid, tag, user_id FROM birthright_db.accounts, birthright_db.login where user_id = student_id and verified='1' and tag = '2'
	and balance <= '".$searchx."'
	";
	}
	}
	// empty search, balance filter
	
	// empty search, monthlypayment filter
	else if(isset($_POST["submit"]) and $_POST["DoesNotMatter1"] == "N" and $_POST["DoesNotMatter2"] == "monthlypayment")
	
	{

	$search = $_POST["search_text"];
	$searchz = $_POST["search_textz"];
	$searchx = $_POST["search_textx"];
	
	if ($searchz != "" and $searchx != "") {
	$results = "
	SELECT student_id, first_name, last_name, month1, month2, month3, month4, month5, month6, month7, month8, month9, total_tuition, downpayment, total_payment, balance, monthly_payment, late_payer, fully_paid, tag, user_id FROM birthright_db.accounts, birthright_db.login where user_id = student_id and verified='1' and tag = '2'
	and monthly_payment >= '".$searchz."' and monthly_payment <= '".$searchx."'
	";
	}
	else if ($searchx == "") {
	$results = "
	SELECT student_id, first_name, last_name, month1, month2, month3, month4, month5, month6, month7, month8, month9, total_tuition, downpayment, total_payment, balance, monthly_payment, late_payer, fully_paid, tag, user_id FROM birthright_db.accounts, birthright_db.login where user_id = student_id and verified='1' and tag = '2'
	and monthly_payment >= '".$searchz."'
	";
	}
	else if ($searchz == "") {
	$results = "
	SELECT student_id, first_name, last_name, month1, month2, month3, month4, month5, month6, month7, month8, month9, total_tuition, downpayment, total_payment, balance, monthly_payment, late_payer, fully_paid, tag, user_id FROM birthright_db.accounts, birthright_db.login where user_id = student_id and verified='1' and tag = '2'
	and monthly_payment <= '".$searchx."'
	";
	}
	}
	// empty search, monthlypayment filter
	
	
	
	
	// student ID territory
	else if(isset($_POST["submit"]) and $_POST["DoesNotMatter1"] == "student_id")
	
	{
	$search = $_POST["search_text"];
	$searchz = $_POST["search_textz"];
	$searchx = $_POST["search_textx"];
	
	if ($_POST["DoesNotMatter2"] == "N"){
	
	$results = "
	SELECT student_id, first_name, last_name, month1, month2, month3, month4, month5, month6, month7, month8, month9, total_tuition, downpayment, total_payment, balance, monthly_payment, late_payer, fully_paid, tag, user_id FROM birthright_db.accounts, birthright_db.login where user_id = student_id and verified='1' and tag = '2'
	and student_id LIKE '".$search."%'
	";
	}
	// tuition
	else if ($_POST["DoesNotMatter2"] == "tuition"){
	if ($searchz != "" and $searchx != "") {
	$results = "
	SELECT student_id, first_name, last_name, month1, month2, month3, month4, month5, month6, month7, month8, month9, total_tuition, downpayment, total_payment, balance, monthly_payment, late_payer, fully_paid, tag, user_id FROM birthright_db.accounts, birthright_db.login where user_id = student_id and verified='1' and tag = '2'
	and student_id LIKE '".$search."%'
	and total_tuition >= '".$searchz."' and total_tuition <= '".$searchx."'
	";
	}
	else if ($searchx == "") {
	$results = "
	SELECT student_id, first_name, last_name, month1, month2, month3, month4, month5, month6, month7, month8, month9, total_tuition, downpayment, total_payment, balance, monthly_payment, late_payer, fully_paid, tag, user_id FROM birthright_db.accounts, birthright_db.login where user_id = student_id and verified='1' and tag = '2'
	and student_id LIKE '".$search."%'
	and total_tuition >= '".$searchz."'
	";
	}
	else if ($searchz == "") {
	$results = "
	SELECT student_id, first_name, last_name, month1, month2, month3, month4, month5, month6, month7, month8, month9, total_tuition, downpayment, total_payment, balance, monthly_payment, late_payer, fully_paid, tag, user_id FROM birthright_db.accounts, birthright_db.login where user_id = student_id and verified='1' and tag = '2'
	and student_id LIKE '".$search."%'
	and total_tuition <= '".$searchx."'
	";
	}
	}
	// tuition
	
	// downpayment
	else if ($_POST["DoesNotMatter2"] == "downpayment"){
	if ($searchz != "" and $searchx != "") {
	$results = "
	SELECT student_id, first_name, last_name, month1, month2, month3, month4, month5, month6, month7, month8, month9, total_tuition, downpayment, total_payment, balance, monthly_payment, late_payer, fully_paid, tag, user_id FROM birthright_db.accounts, birthright_db.login where user_id = student_id and verified='1' and tag = '2'
	and student_id LIKE '".$search."%'
	and downpayment >= '".$searchz."' and downpayment <= '".$searchx."'
	";
	}
	else if ($searchx == "") {
	$results = "
	SELECT student_id, first_name, last_name, month1, month2, month3, month4, month5, month6, month7, month8, month9, total_tuition, downpayment, total_payment, balance, monthly_payment, late_payer, fully_paid, tag, user_id FROM birthright_db.accounts, birthright_db.login where user_id = student_id and verified='1' and tag = '2'
	and student_id LIKE '".$search."%'
	and downpayment >= '".$searchz."'
	";
	}
	else if ($searchz == "") {
	$results = "
	SELECT student_id, first_name, last_name, month1, month2, month3, month4, month5, month6, month7, month8, month9, total_tuition, downpayment, total_payment, balance, monthly_payment, late_payer, fully_paid, tag, user_id FROM birthright_db.accounts, birthright_db.login where user_id = student_id and verified='1' and tag = '2'
	and student_id LIKE '".$search."%'
	and downpayment <= '".$searchx."'
	";
	}
	}
	// downpayment
	
	// month1
	else if ($_POST["DoesNotMatter2"] == "month1"){
	if ($searchz != "" and $searchx != "") {
	$results = "
	SELECT student_id, first_name, last_name, month1, month2, month3, month4, month5, month6, month7, month8, month9, total_tuition, downpayment, total_payment, balance, monthly_payment, late_payer, fully_paid, tag, user_id FROM birthright_db.accounts, birthright_db.login where user_id = student_id and verified='1' and tag = '2'
	and student_id LIKE '".$search."%'
	and month1 >= '".$searchz."' and month1 <= '".$searchx."'
	";
	}
	else if ($searchx == "") {
	$results = "
	SELECT student_id, first_name, last_name, month1, month2, month3, month4, month5, month6, month7, month8, month9, total_tuition, downpayment, total_payment, balance, monthly_payment, late_payer, fully_paid, tag, user_id FROM birthright_db.accounts, birthright_db.login where user_id = student_id and verified='1' and tag = '2'
	and student_id LIKE '".$search."%'
	and month1 >= '".$searchz."'
	";
	}
	else if ($searchz == "") {
	$results = "
	SELECT student_id, first_name, last_name, month1, month2, month3, month4, month5, month6, month7, month8, month9, total_tuition, downpayment, total_payment, balance, monthly_payment, late_payer, fully_paid, tag, user_id FROM birthright_db.accounts, birthright_db.login where user_id = student_id and verified='1' and tag = '2'
	and student_id LIKE '".$search."%'
	and month1 <= '".$searchx."'
	";
	}
	}
	// month1
	
	// month2
	else if ($_POST["DoesNotMatter2"] == "month2"){
	if ($searchz != "" and $searchx != "") {
	$results = "
	SELECT student_id, first_name, last_name, month1, month2, month3, month4, month5, month6, month7, month8, month9, total_tuition, downpayment, total_payment, balance, monthly_payment, late_payer, fully_paid, tag, user_id FROM birthright_db.accounts, birthright_db.login where user_id = student_id and verified='1' and tag = '2'
	and student_id LIKE '".$search."%'
	and month2 >= '".$searchz."' and month2 <= '".$searchx."'
	";
	}
	else if ($searchx == "") {
	$results = "
	SELECT student_id, first_name, last_name, month1, month2, month3, month4, month5, month6, month7, month8, month9, total_tuition, downpayment, total_payment, balance, monthly_payment, late_payer, fully_paid, tag, user_id FROM birthright_db.accounts, birthright_db.login where user_id = student_id and verified='1' and tag = '2'
	and student_id LIKE '".$search."%'
	and month2 >= '".$searchz."'
	";
	}
	else if ($searchz == "") {
	$results = "
	SELECT student_id, first_name, last_name, month1, month2, month3, month4, month5, month6, month7, month8, month9, total_tuition, downpayment, total_payment, balance, monthly_payment, late_payer, fully_paid, tag, user_id FROM birthright_db.accounts, birthright_db.login where user_id = student_id and verified='1' and tag = '2'
	and student_id LIKE '".$search."%'
	and month2 <= '".$searchx."'
	";
	}
	}
	// month2
	
	// month3
	else if ($_POST["DoesNotMatter2"] == "month3"){
	if ($searchz != "" and $searchx != "") {
	$results = "
	SELECT student_id, first_name, last_name, month1, month2, month3, month4, month5, month6, month7, month8, month9, total_tuition, downpayment, total_payment, balance, monthly_payment, late_payer, fully_paid, tag, user_id FROM birthright_db.accounts, birthright_db.login where user_id = student_id and verified='1' and tag = '2'
	and student_id LIKE '".$search."%'
	and month3 >= '".$searchz."' and month3 <= '".$searchx."'
	";
	}
	else if ($searchx == "") {
	$results = "
	SELECT student_id, first_name, last_name, month1, month2, month3, month4, month5, month6, month7, month8, month9, total_tuition, downpayment, total_payment, balance, monthly_payment, late_payer, fully_paid, tag, user_id FROM birthright_db.accounts, birthright_db.login where user_id = student_id and verified='1' and tag = '2'
	and student_id LIKE '".$search."%'
	and month3 >= '".$searchz."'
	";
	}
	else if ($searchz == "") {
	$results = "
	SELECT student_id, first_name, last_name, month1, month2, month3, month4, month5, month6, month7, month8, month9, total_tuition, downpayment, total_payment, balance, monthly_payment, late_payer, fully_paid, tag, user_id FROM birthright_db.accounts, birthright_db.login where user_id = student_id and verified='1' and tag = '2'
	and student_id LIKE '".$search."%'
	and month3 <= '".$searchx."'
	";
	}
	}
	// month3
	
	// month4
	else if ($_POST["DoesNotMatter2"] == "month4"){
	if ($searchz != "" and $searchx != "") {
	$results = "
	SELECT student_id, first_name, last_name, month1, month2, month3, month4, month5, month6, month7, month8, month9, total_tuition, downpayment, total_payment, balance, monthly_payment, late_payer, fully_paid, tag, user_id FROM birthright_db.accounts, birthright_db.login where user_id = student_id and verified='1' and tag = '2'
	and student_id LIKE '".$search."%'
	and month4 >= '".$searchz."' and month4 <= '".$searchx."'
	";
	}
	else if ($searchx == "") {
	$results = "
	SELECT student_id, first_name, last_name, month1, month2, month3, month4, month5, month6, month7, month8, month9, total_tuition, downpayment, total_payment, balance, monthly_payment, late_payer, fully_paid, tag, user_id FROM birthright_db.accounts, birthright_db.login where user_id = student_id and verified='1' and tag = '2'
	and student_id LIKE '".$search."%'
	and month4 >= '".$searchz."'
	";
	}
	else if ($searchz == "") {
	$results = "
	SELECT student_id, first_name, last_name, month1, month2, month3, month4, month5, month6, month7, month8, month9, total_tuition, downpayment, total_payment, balance, monthly_payment, late_payer, fully_paid, tag, user_id FROM birthright_db.accounts, birthright_db.login where user_id = student_id and verified='1' and tag = '2'
	and student_id LIKE '".$search."%'
	and month4 <= '".$searchx."'
	";
	}
	}
	// month4
	
	// month5
	else if ($_POST["DoesNotMatter2"] == "month5"){
	if ($searchz != "" and $searchx != "") {
	$results = "
	SELECT student_id, first_name, last_name, month1, month2, month3, month4, month5, month6, month7, month8, month9, total_tuition, downpayment, total_payment, balance, monthly_payment, late_payer, fully_paid, tag, user_id FROM birthright_db.accounts, birthright_db.login where user_id = student_id and verified='1' and tag = '2'
	and student_id LIKE '".$search."%'
	and month5 >= '".$searchz."' and month5 <= '".$searchx."'
	";
	}
	else if ($searchx == "") {
	$results = "
	SELECT student_id, first_name, last_name, month1, month2, month3, month4, month5, month6, month7, month8, month9, total_tuition, downpayment, total_payment, balance, monthly_payment, late_payer, fully_paid, tag, user_id FROM birthright_db.accounts, birthright_db.login where user_id = student_id and verified='1' and tag = '2'
	and student_id LIKE '".$search."%'
	and month5 >= '".$searchz."'
	";
	}
	else if ($searchz == "") {
	$results = "
	SELECT student_id, first_name, last_name, month1, month2, month3, month4, month5, month6, month7, month8, month9, total_tuition, downpayment, total_payment, balance, monthly_payment, late_payer, fully_paid, tag, user_id FROM birthright_db.accounts, birthright_db.login where user_id = student_id and verified='1' and tag = '2'
	and student_id LIKE '".$search."%'
	and month5 <= '".$searchx."'
	";
	}
	}
	// month5
	
	// month6
	else if ($_POST["DoesNotMatter2"] == "month6"){
	if ($searchz != "" and $searchx != "") {
	$results = "
	SELECT student_id, first_name, last_name, month1, month2, month3, month4, month5, month6, month7, month8, month9, total_tuition, downpayment, total_payment, balance, monthly_payment, late_payer, fully_paid, tag, user_id FROM birthright_db.accounts, birthright_db.login where user_id = student_id and verified='1' and tag = '2'
	and student_id LIKE '".$search."%'
	and month6 >= '".$searchz."' and month6 <= '".$searchx."'
	";
	}
	else if ($searchx == "") {
	$results = "
	SELECT student_id, first_name, last_name, month1, month2, month3, month4, month5, month6, month7, month8, month9, total_tuition, downpayment, total_payment, balance, monthly_payment, late_payer, fully_paid, tag, user_id FROM birthright_db.accounts, birthright_db.login where user_id = student_id and verified='1' and tag = '2'
	and student_id LIKE '".$search."%'
	and month6 >= '".$searchz."'
	";
	}
	else if ($searchz == "") {
	$results = "
	SELECT student_id, first_name, last_name, month1, month2, month3, month4, month5, month6, month7, month8, month9, total_tuition, downpayment, total_payment, balance, monthly_payment, late_payer, fully_paid, tag, user_id FROM birthright_db.accounts, birthright_db.login where user_id = student_id and verified='1' and tag = '2'
	and student_id LIKE '".$search."%'
	and month6 <= '".$searchx."'
	";
	}
	}
	// month6
	
	// month7
	else if ($_POST["DoesNotMatter2"] == "month7"){
	if ($searchz != "" and $searchx != "") {
	$results = "
	SELECT student_id, first_name, last_name, month1, month2, month3, month4, month5, month6, month7, month8, month9, total_tuition, downpayment, total_payment, balance, monthly_payment, late_payer, fully_paid, tag, user_id FROM birthright_db.accounts, birthright_db.login where user_id = student_id and verified='1' and tag = '2'
	and student_id LIKE '".$search."%'
	and month7 >= '".$searchz."' and month7 <= '".$searchx."'
	";
	}
	else if ($searchx == "") {
	$results = "
	SELECT student_id, first_name, last_name, month1, month2, month3, month4, month5, month6, month7, month8, month9, total_tuition, downpayment, total_payment, balance, monthly_payment, late_payer, fully_paid, tag, user_id FROM birthright_db.accounts, birthright_db.login where user_id = student_id and verified='1' and tag = '2'
	and student_id LIKE '".$search."%'
	and month7 >= '".$searchz."'
	";
	}
	else if ($searchz == "") {
	$results = "
	SELECT student_id, first_name, last_name, month1, month2, month3, month4, month5, month6, month7, month8, month9, total_tuition, downpayment, total_payment, balance, monthly_payment, late_payer, fully_paid, tag, user_id FROM birthright_db.accounts, birthright_db.login where user_id = student_id and verified='1' and tag = '2'
	and student_id LIKE '".$search."%'
	and month7 <= '".$searchx."'
	";
	}
	}
	// month7
	
	// month8
	else if ($_POST["DoesNotMatter2"] == "month8"){
	if ($searchz != "" and $searchx != "") {
	$results = "
	SELECT student_id, first_name, last_name, month1, month2, month3, month4, month5, month6, month7, month8, month9, total_tuition, downpayment, total_payment, balance, monthly_payment, late_payer, fully_paid, tag, user_id FROM birthright_db.accounts, birthright_db.login where user_id = student_id and verified='1' and tag = '2'
	and student_id LIKE '".$search."%'
	and month8 >= '".$searchz."' and month8 <= '".$searchx."'
	";
	}
	else if ($searchx == "") {
	$results = "
	SELECT student_id, first_name, last_name, month1, month2, month3, month4, month5, month6, month7, month8, month9, total_tuition, downpayment, total_payment, balance, monthly_payment, late_payer, fully_paid, tag, user_id FROM birthright_db.accounts, birthright_db.login where user_id = student_id and verified='1' and tag = '2'
	and student_id LIKE '".$search."%'
	and month8 >= '".$searchz."'
	";
	}
	else if ($searchz == "") {
	$results = "
	SELECT student_id, first_name, last_name, month1, month2, month3, month4, month5, month6, month7, month8, month9, total_tuition, downpayment, total_payment, balance, monthly_payment, late_payer, fully_paid, tag, user_id FROM birthright_db.accounts, birthright_db.login where user_id = student_id and verified='1' and tag = '2'
	and student_id LIKE '".$search."%'
	and month8 <= '".$searchx."'
	";
	}
	}
	// month8
	
	// month9
	else if ($_POST["DoesNotMatter2"] == "month9"){
	if ($searchz != "" and $searchx != "") {
	$results = "
	SELECT student_id, first_name, last_name, month1, month2, month3, month4, month5, month6, month7, month8, month9, total_tuition, downpayment, total_payment, balance, monthly_payment, late_payer, fully_paid, tag, user_id FROM birthright_db.accounts, birthright_db.login where user_id = student_id and verified='1' and tag = '2'
	and student_id LIKE '".$search."%'
	and month9 >= '".$searchz."' and month9 <= '".$searchx."'
	";
	}
	else if ($searchx == "") {
	$results = "
	SELECT student_id, first_name, last_name, month1, month2, month3, month4, month5, month6, month7, month8, month9, total_tuition, downpayment, total_payment, balance, monthly_payment, late_payer, fully_paid, tag, user_id FROM birthright_db.accounts, birthright_db.login where user_id = student_id and verified='1' and tag = '2'
	and student_id LIKE '".$search."%'
	and month9 >= '".$searchz."'
	";
	}
	else if ($searchz == "") {
	$results = "
	SELECT student_id, first_name, last_name, month1, month2, month3, month4, month5, month6, month7, month8, month9, total_tuition, downpayment, total_payment, balance, monthly_payment, late_payer, fully_paid, tag, user_id FROM birthright_db.accounts, birthright_db.login where user_id = student_id and verified='1' and tag = '2'
	and student_id LIKE '".$search."%'
	and month9 <= '".$searchx."'
	";
	}
	}
	// month9
	
	// balance
	else if ($_POST["DoesNotMatter2"] == "balance"){
	if ($searchz != "" and $searchx != "") {
	$results = "
	SELECT student_id, first_name, last_name, month1, month2, month3, month4, month5, month6, month7, month8, month9, total_tuition, downpayment, total_payment, balance, monthly_payment, late_payer, fully_paid, tag, user_id FROM birthright_db.accounts, birthright_db.login where user_id = student_id and verified='1' and tag = '2'
	and student_id LIKE '".$search."%'
	and balance >= '".$searchz."' and balance <= '".$searchx."'
	";
	}
	else if ($searchx == "") {
	$results = "
	SELECT student_id, first_name, last_name, month1, month2, month3, month4, month5, month6, month7, month8, month9, total_tuition, downpayment, total_payment, balance, monthly_payment, late_payer, fully_paid, tag, user_id FROM birthright_db.accounts, birthright_db.login where user_id = student_id and verified='1' and tag = '2'
	and student_id LIKE '".$search."%'
	and balance >= '".$searchz."'
	";
	}
	else if ($searchz == "") {
	$results = "
	SELECT student_id, first_name, last_name, month1, month2, month3, month4, month5, month6, month7, month8, month9, total_tuition, downpayment, total_payment, balance, monthly_payment, late_payer, fully_paid, tag, user_id FROM birthright_db.accounts, birthright_db.login where user_id = student_id and verified='1' and tag = '2'
	and student_id LIKE '".$search."%'
	and balance <= '".$searchx."'
	";
	}
	}
	// balance
	
	// monthlypayment
	else if ($_POST["DoesNotMatter2"] == "monthlypayment"){
	if ($searchz != "" and $searchx != "") {
	$results = "
	SELECT student_id, first_name, last_name, month1, month2, month3, month4, month5, month6, month7, month8, month9, total_tuition, downpayment, total_payment, balance, monthly_payment, late_payer, fully_paid, tag, user_id FROM birthright_db.accounts, birthright_db.login where user_id = student_id and verified='1' and tag = '2'
	and student_id LIKE '".$search."%'
	and monthly_payment >= '".$searchz."' and monthly_payment <= '".$searchx."'
	";
	}
	else if ($searchx == "") {
	$results = "
	SELECT student_id, first_name, last_name, month1, month2, month3, month4, month5, month6, month7, month8, month9, total_tuition, downpayment, total_payment, balance, monthly_payment, late_payer, fully_paid, tag, user_id FROM birthright_db.accounts, birthright_db.login where user_id = student_id and verified='1' and tag = '2'
	and student_id LIKE '".$search."%'
	and monthly_payment >= '".$searchz."'
	";
	}
	else if ($searchz == "") {
	$results = "
	SELECT student_id, first_name, last_name, month1, month2, month3, month4, month5, month6, month7, month8, month9, total_tuition, downpayment, total_payment, balance, monthly_payment, late_payer, fully_paid, tag, user_id FROM birthright_db.accounts, birthright_db.login where user_id = student_id and verified='1' and tag = '2'
	and student_id LIKE '".$search."%'
	and monthly_payment <= '".$searchx."'
	";
	}
	}
	// monthlypayment
	
	
	}
	
	// student ID territory
	
	
	
	// first_name territory
	else if(isset($_POST["submit"]) and $_POST["DoesNotMatter1"] == "first_name")
	
	{
	$search = $_POST["search_text"];
	$searchz = $_POST["search_textz"];
	$searchx = $_POST["search_textx"];
	
	if ($_POST["DoesNotMatter2"] == "N"){
	
	$results = "
	SELECT student_id, first_name, last_name, month1, month2, month3, month4, month5, month6, month7, month8, month9, total_tuition, downpayment, total_payment, balance, monthly_payment, late_payer, fully_paid, tag, user_id FROM birthright_db.accounts, birthright_db.login where user_id = student_id and verified='1' and tag = '2'
	and first_name LIKE '".$search."%'
	";
	}
	// tuition
	else if ($_POST["DoesNotMatter2"] == "tuition"){
	if ($searchz != "" and $searchx != "") {
	$results = "
	SELECT student_id, first_name, last_name, month1, month2, month3, month4, month5, month6, month7, month8, month9, total_tuition, downpayment, total_payment, balance, monthly_payment, late_payer, fully_paid, tag, user_id FROM birthright_db.accounts, birthright_db.login where user_id = student_id and verified='1' and tag = '2'
	and first_name LIKE '".$search."%'
	and total_tuition >= '".$searchz."' and total_tuition <= '".$searchx."'
	";
	}
	else if ($searchx == "") {
	$results = "
	SELECT student_id, first_name, last_name, month1, month2, month3, month4, month5, month6, month7, month8, month9, total_tuition, downpayment, total_payment, balance, monthly_payment, late_payer, fully_paid, tag, user_id FROM birthright_db.accounts, birthright_db.login where user_id = student_id and verified='1' and tag = '2'
	and first_name LIKE '".$search."%'
	and total_tuition >= '".$searchz."'
	";
	}
	else if ($searchz == "") {
	$results = "
	SELECT student_id, first_name, last_name, month1, month2, month3, month4, month5, month6, month7, month8, month9, total_tuition, downpayment, total_payment, balance, monthly_payment, late_payer, fully_paid, tag, user_id FROM birthright_db.accounts, birthright_db.login where user_id = student_id and verified='1' and tag = '2'
	and first_name LIKE '".$search."%'
	and total_tuition <= '".$searchx."'
	";
	}
	}
	// tuition
	
	// downpayment
	else if ($_POST["DoesNotMatter2"] == "downpayment"){
	if ($searchz != "" and $searchx != "") {
	$results = "
	SELECT student_id, first_name, last_name, month1, month2, month3, month4, month5, month6, month7, month8, month9, total_tuition, downpayment, total_payment, balance, monthly_payment, late_payer, fully_paid, tag, user_id FROM birthright_db.accounts, birthright_db.login where user_id = student_id and verified='1' and tag = '2'
	and first_name LIKE '".$search."%'
	and downpayment >= '".$searchz."' and downpayment <= '".$searchx."'
	";
	}
	else if ($searchx == "") {
	$results = "
	SELECT student_id, first_name, last_name, month1, month2, month3, month4, month5, month6, month7, month8, month9, total_tuition, downpayment, total_payment, balance, monthly_payment, late_payer, fully_paid, tag, user_id FROM birthright_db.accounts, birthright_db.login where user_id = student_id and verified='1' and tag = '2'
	and first_name LIKE '".$search."%'
	and downpayment >= '".$searchz."'
	";
	}
	else if ($searchz == "") {
	$results = "
	SELECT student_id, first_name, last_name, month1, month2, month3, month4, month5, month6, month7, month8, month9, total_tuition, downpayment, total_payment, balance, monthly_payment, late_payer, fully_paid, tag, user_id FROM birthright_db.accounts, birthright_db.login where user_id = student_id and verified='1' and tag = '2'
	and first_name LIKE '".$search."%'
	and downpayment <= '".$searchx."'
	";
	}
	}
	// downpayment
	
	// month1
	else if ($_POST["DoesNotMatter2"] == "month1"){
	if ($searchz != "" and $searchx != "") {
	$results = "
	SELECT student_id, first_name, last_name, month1, month2, month3, month4, month5, month6, month7, month8, month9, total_tuition, downpayment, total_payment, balance, monthly_payment, late_payer, fully_paid, tag, user_id FROM birthright_db.accounts, birthright_db.login where user_id = student_id and verified='1' and tag = '2'
	and first_name LIKE '".$search."%'
	and month1 >= '".$searchz."' and month1 <= '".$searchx."'
	";
	}
	else if ($searchx == "") {
	$results = "
	SELECT student_id, first_name, last_name, month1, month2, month3, month4, month5, month6, month7, month8, month9, total_tuition, downpayment, total_payment, balance, monthly_payment, late_payer, fully_paid, tag, user_id FROM birthright_db.accounts, birthright_db.login where user_id = student_id and verified='1' and tag = '2'
	and first_name LIKE '".$search."%'
	and month1 >= '".$searchz."'
	";
	}
	else if ($searchz == "") {
	$results = "
	SELECT student_id, first_name, last_name, month1, month2, month3, month4, month5, month6, month7, month8, month9, total_tuition, downpayment, total_payment, balance, monthly_payment, late_payer, fully_paid, tag, user_id FROM birthright_db.accounts, birthright_db.login where user_id = student_id and verified='1' and tag = '2'
	and first_name LIKE '".$search."%'
	and month1 <= '".$searchx."'
	";
	}
	}
	// month1
	
	// month2
	else if ($_POST["DoesNotMatter2"] == "month2"){
	if ($searchz != "" and $searchx != "") {
	$results = "
	SELECT student_id, first_name, last_name, month1, month2, month3, month4, month5, month6, month7, month8, month9, total_tuition, downpayment, total_payment, balance, monthly_payment, late_payer, fully_paid, tag, user_id FROM birthright_db.accounts, birthright_db.login where user_id = student_id and verified='1' and tag = '2'
	and first_name LIKE '".$search."%'
	and month2 >= '".$searchz."' and month2 <= '".$searchx."'
	";
	}
	else if ($searchx == "") {
	$results = "
	SELECT student_id, first_name, last_name, month1, month2, month3, month4, month5, month6, month7, month8, month9, total_tuition, downpayment, total_payment, balance, monthly_payment, late_payer, fully_paid, tag, user_id FROM birthright_db.accounts, birthright_db.login where user_id = student_id and verified='1' and tag = '2'
	and first_name LIKE '".$search."%'
	and month2 >= '".$searchz."'
	";
	}
	else if ($searchz == "") {
	$results = "
	SELECT student_id, first_name, last_name, month1, month2, month3, month4, month5, month6, month7, month8, month9, total_tuition, downpayment, total_payment, balance, monthly_payment, late_payer, fully_paid, tag, user_id FROM birthright_db.accounts, birthright_db.login where user_id = student_id and verified='1' and tag = '2'
	and first_name LIKE '".$search."%'
	and month2 <= '".$searchx."'
	";
	}
	}
	// month2
	
	// month3
	else if ($_POST["DoesNotMatter2"] == "month3"){
	if ($searchz != "" and $searchx != "") {
	$results = "
	SELECT student_id, first_name, last_name, month1, month2, month3, month4, month5, month6, month7, month8, month9, total_tuition, downpayment, total_payment, balance, monthly_payment, late_payer, fully_paid, tag, user_id FROM birthright_db.accounts, birthright_db.login where user_id = student_id and verified='1' and tag = '2'
	and first_name LIKE '".$search."%'
	and month3 >= '".$searchz."' and month3 <= '".$searchx."'
	";
	}
	else if ($searchx == "") {
	$results = "
	SELECT student_id, first_name, last_name, month1, month2, month3, month4, month5, month6, month7, month8, month9, total_tuition, downpayment, total_payment, balance, monthly_payment, late_payer, fully_paid, tag, user_id FROM birthright_db.accounts, birthright_db.login where user_id = student_id and verified='1' and tag = '2'
	and first_name LIKE '".$search."%'
	and month3 >= '".$searchz."'
	";
	}
	else if ($searchz == "") {
	$results = "
	SELECT student_id, first_name, last_name, month1, month2, month3, month4, month5, month6, month7, month8, month9, total_tuition, downpayment, total_payment, balance, monthly_payment, late_payer, fully_paid, tag, user_id FROM birthright_db.accounts, birthright_db.login where user_id = student_id and verified='1' and tag = '2'
	and first_name LIKE '".$search."%'
	and month3 <= '".$searchx."'
	";
	}
	}
	// month3
	
	// month4
	else if ($_POST["DoesNotMatter2"] == "month4"){
	if ($searchz != "" and $searchx != "") {
	$results = "
	SELECT student_id, first_name, last_name, month1, month2, month3, month4, month5, month6, month7, month8, month9, total_tuition, downpayment, total_payment, balance, monthly_payment, late_payer, fully_paid, tag, user_id FROM birthright_db.accounts, birthright_db.login where user_id = student_id and verified='1' and tag = '2'
	and first_name LIKE '".$search."%'
	and month4 >= '".$searchz."' and month4 <= '".$searchx."'
	";
	}
	else if ($searchx == "") {
	$results = "
	SELECT student_id, first_name, last_name, month1, month2, month3, month4, month5, month6, month7, month8, month9, total_tuition, downpayment, total_payment, balance, monthly_payment, late_payer, fully_paid, tag, user_id FROM birthright_db.accounts, birthright_db.login where user_id = student_id and verified='1' and tag = '2'
	and first_name LIKE '".$search."%'
	and month4 >= '".$searchz."'
	";
	}
	else if ($searchz == "") {
	$results = "
	SELECT student_id, first_name, last_name, month1, month2, month3, month4, month5, month6, month7, month8, month9, total_tuition, downpayment, total_payment, balance, monthly_payment, late_payer, fully_paid, tag, user_id FROM birthright_db.accounts, birthright_db.login where user_id = student_id and verified='1' and tag = '2'
	and first_name LIKE '".$search."%'
	and month4 <= '".$searchx."'
	";
	}
	}
	// month4
	
	// month5
	else if ($_POST["DoesNotMatter2"] == "month5"){
	if ($searchz != "" and $searchx != "") {
	$results = "
	SELECT student_id, first_name, last_name, month1, month2, month3, month4, month5, month6, month7, month8, month9, total_tuition, downpayment, total_payment, balance, monthly_payment, late_payer, fully_paid, tag, user_id FROM birthright_db.accounts, birthright_db.login where user_id = student_id and verified='1' and tag = '2'
	and first_name LIKE '".$search."%'
	and month5 >= '".$searchz."' and month5 <= '".$searchx."'
	";
	}
	else if ($searchx == "") {
	$results = "
	SELECT student_id, first_name, last_name, month1, month2, month3, month4, month5, month6, month7, month8, month9, total_tuition, downpayment, total_payment, balance, monthly_payment, late_payer, fully_paid, tag, user_id FROM birthright_db.accounts, birthright_db.login where user_id = student_id and verified='1' and tag = '2'
	and first_name LIKE '".$search."%'
	and month5 >= '".$searchz."'
	";
	}
	else if ($searchz == "") {
	$results = "
	SELECT student_id, first_name, last_name, month1, month2, month3, month4, month5, month6, month7, month8, month9, total_tuition, downpayment, total_payment, balance, monthly_payment, late_payer, fully_paid, tag, user_id FROM birthright_db.accounts, birthright_db.login where user_id = student_id and verified='1' and tag = '2'
	and first_name LIKE '".$search."%'
	and month5 <= '".$searchx."'
	";
	}
	}
	// month5
	
	// month6
	else if ($_POST["DoesNotMatter2"] == "month6"){
	if ($searchz != "" and $searchx != "") {
	$results = "
	SELECT student_id, first_name, last_name, month1, month2, month3, month4, month5, month6, month7, month8, month9, total_tuition, downpayment, total_payment, balance, monthly_payment, late_payer, fully_paid, tag, user_id FROM birthright_db.accounts, birthright_db.login where user_id = student_id and verified='1' and tag = '2'
	and first_name LIKE '".$search."%'
	and month6 >= '".$searchz."' and month6 <= '".$searchx."'
	";
	}
	else if ($searchx == "") {
	$results = "
	SELECT student_id, first_name, last_name, month1, month2, month3, month4, month5, month6, month7, month8, month9, total_tuition, downpayment, total_payment, balance, monthly_payment, late_payer, fully_paid, tag, user_id FROM birthright_db.accounts, birthright_db.login where user_id = student_id and verified='1' and tag = '2'
	and first_name LIKE '".$search."%'
	and month6 >= '".$searchz."'
	";
	}
	else if ($searchz == "") {
	$results = "
	SELECT student_id, first_name, last_name, month1, month2, month3, month4, month5, month6, month7, month8, month9, total_tuition, downpayment, total_payment, balance, monthly_payment, late_payer, fully_paid, tag, user_id FROM birthright_db.accounts, birthright_db.login where user_id = student_id and verified='1' and tag = '2'
	and first_name LIKE '".$search."%'
	and month6 <= '".$searchx."'
	";
	}
	}
	// month6
	
	// month7
	else if ($_POST["DoesNotMatter2"] == "month7"){
	if ($searchz != "" and $searchx != "") {
	$results = "
	SELECT student_id, first_name, last_name, month1, month2, month3, month4, month5, month6, month7, month8, month9, total_tuition, downpayment, total_payment, balance, monthly_payment, late_payer, fully_paid, tag, user_id FROM birthright_db.accounts, birthright_db.login where user_id = student_id and verified='1' and tag = '2'
	and first_name LIKE '".$search."%'
	and month7 >= '".$searchz."' and month7 <= '".$searchx."'
	";
	}
	else if ($searchx == "") {
	$results = "
	SELECT student_id, first_name, last_name, month1, month2, month3, month4, month5, month6, month7, month8, month9, total_tuition, downpayment, total_payment, balance, monthly_payment, late_payer, fully_paid, tag, user_id FROM birthright_db.accounts, birthright_db.login where user_id = student_id and verified='1' and tag = '2'
	and first_name LIKE '".$search."%'
	and month7 >= '".$searchz."'
	";
	}
	else if ($searchz == "") {
	$results = "
	SELECT student_id, first_name, last_name, month1, month2, month3, month4, month5, month6, month7, month8, month9, total_tuition, downpayment, total_payment, balance, monthly_payment, late_payer, fully_paid, tag, user_id FROM birthright_db.accounts, birthright_db.login where user_id = student_id and verified='1' and tag = '2'
	and first_name LIKE '".$search."%'
	and month7 <= '".$searchx."'
	";
	}
	}
	// month7
	
	// month8
	else if ($_POST["DoesNotMatter2"] == "month8"){
	if ($searchz != "" and $searchx != "") {
	$results = "
	SELECT student_id, first_name, last_name, month1, month2, month3, month4, month5, month6, month7, month8, month9, total_tuition, downpayment, total_payment, balance, monthly_payment, late_payer, fully_paid, tag, user_id FROM birthright_db.accounts, birthright_db.login where user_id = student_id and verified='1' and tag = '2'
	and first_name LIKE '".$search."%'
	and month8 >= '".$searchz."' and month8 <= '".$searchx."'
	";
	}
	else if ($searchx == "") {
	$results = "
	SELECT student_id, first_name, last_name, month1, month2, month3, month4, month5, month6, month7, month8, month9, total_tuition, downpayment, total_payment, balance, monthly_payment, late_payer, fully_paid, tag, user_id FROM birthright_db.accounts, birthright_db.login where user_id = student_id and verified='1' and tag = '2'
	and first_name LIKE '".$search."%'
	and month8 >= '".$searchz."'
	";
	}
	else if ($searchz == "") {
	$results = "
	SELECT student_id, first_name, last_name, month1, month2, month3, month4, month5, month6, month7, month8, month9, total_tuition, downpayment, total_payment, balance, monthly_payment, late_payer, fully_paid, tag, user_id FROM birthright_db.accounts, birthright_db.login where user_id = student_id and verified='1' and tag = '2'
	and first_name LIKE '".$search."%'
	and month8 <= '".$searchx."'
	";
	}
	}
	// month8
	
	// month9
	else if ($_POST["DoesNotMatter2"] == "month9"){
	if ($searchz != "" and $searchx != "") {
	$results = "
	SELECT student_id, first_name, last_name, month1, month2, month3, month4, month5, month6, month7, month8, month9, total_tuition, downpayment, total_payment, balance, monthly_payment, late_payer, fully_paid, tag, user_id FROM birthright_db.accounts, birthright_db.login where user_id = student_id and verified='1' and tag = '2'
	and first_name LIKE '".$search."%'
	and month9 >= '".$searchz."' and month9 <= '".$searchx."'
	";
	}
	else if ($searchx == "") {
	$results = "
	SELECT student_id, first_name, last_name, month1, month2, month3, month4, month5, month6, month7, month8, month9, total_tuition, downpayment, total_payment, balance, monthly_payment, late_payer, fully_paid, tag, user_id FROM birthright_db.accounts, birthright_db.login where user_id = student_id and verified='1' and tag = '2'
	and first_name LIKE '".$search."%'
	and month9 >= '".$searchz."'
	";
	}
	else if ($searchz == "") {
	$results = "
	SELECT student_id, first_name, last_name, month1, month2, month3, month4, month5, month6, month7, month8, month9, total_tuition, downpayment, total_payment, balance, monthly_payment, late_payer, fully_paid, tag, user_id FROM birthright_db.accounts, birthright_db.login where user_id = student_id and verified='1' and tag = '2'
	and first_name LIKE '".$search."%'
	and month9 <= '".$searchx."'
	";
	}
	}
	// month9
	
	// balance
	else if ($_POST["DoesNotMatter2"] == "balance"){
	if ($searchz != "" and $searchx != "") {
	$results = "
	SELECT student_id, first_name, last_name, month1, month2, month3, month4, month5, month6, month7, month8, month9, total_tuition, downpayment, total_payment, balance, monthly_payment, late_payer, fully_paid, tag, user_id FROM birthright_db.accounts, birthright_db.login where user_id = student_id and verified='1' and tag = '2'
	and first_name LIKE '".$search."%'
	and balance >= '".$searchz."' and balance <= '".$searchx."'
	";
	}
	else if ($searchx == "") {
	$results = "
	SELECT student_id, first_name, last_name, month1, month2, month3, month4, month5, month6, month7, month8, month9, total_tuition, downpayment, total_payment, balance, monthly_payment, late_payer, fully_paid, tag, user_id FROM birthright_db.accounts, birthright_db.login where user_id = student_id and verified='1' and tag = '2'
	and first_name LIKE '".$search."%'
	and balance >= '".$searchz."'
	";
	}
	else if ($searchz == "") {
	$results = "
	SELECT student_id, first_name, last_name, month1, month2, month3, month4, month5, month6, month7, month8, month9, total_tuition, downpayment, total_payment, balance, monthly_payment, late_payer, fully_paid, tag, user_id FROM birthright_db.accounts, birthright_db.login where user_id = student_id and verified='1' and tag = '2'
	and first_name LIKE '".$search."%'
	and balance <= '".$searchx."'
	";
	}
	}
	// balance
	
	// monthlypayment
	else if ($_POST["DoesNotMatter2"] == "monthlypayment"){
	if ($searchz != "" and $searchx != "") {
	$results = "
	SELECT student_id, first_name, last_name, month1, month2, month3, month4, month5, month6, month7, month8, month9, total_tuition, downpayment, total_payment, balance, monthly_payment, late_payer, fully_paid, tag, user_id FROM birthright_db.accounts, birthright_db.login where user_id = student_id and verified='1' and tag = '2'
	and first_name LIKE '".$search."%'
	and monthly_payment >= '".$searchz."' and monthly_payment <= '".$searchx."'
	";
	}
	else if ($searchx == "") {
	$results = "
	SELECT student_id, first_name, last_name, month1, month2, month3, month4, month5, month6, month7, month8, month9, total_tuition, downpayment, total_payment, balance, monthly_payment, late_payer, fully_paid, tag, user_id FROM birthright_db.accounts, birthright_db.login where user_id = student_id and verified='1' and tag = '2'
	and first_name LIKE '".$search."%'
	and monthly_payment >= '".$searchz."'
	";
	}
	else if ($searchz == "") {
	$results = "
	SELECT student_id, first_name, last_name, month1, month2, month3, month4, month5, month6, month7, month8, month9, total_tuition, downpayment, total_payment, balance, monthly_payment, late_payer, fully_paid, tag, user_id FROM birthright_db.accounts, birthright_db.login where user_id = student_id and verified='1' and tag = '2'
	and first_name LIKE '".$search."%'
	and monthly_payment <= '".$searchx."'
	";
	}
	}
	// monthlypayment
	
	
	}
	
	
	// first_name territory
	
	
	// last_name territory
	else if(isset($_POST["submit"]) and $_POST["DoesNotMatter1"] == "last_name")
	
	{
	$search = $_POST["search_text"];
	$searchz = $_POST["search_textz"];
	$searchx = $_POST["search_textx"];
	
	if ($_POST["DoesNotMatter2"] == "N"){
	
	$results = "
	SELECT student_id, first_name, last_name, month1, month2, month3, month4, month5, month6, month7, month8, month9, total_tuition, downpayment, total_payment, balance, monthly_payment, late_payer, fully_paid, tag, user_id FROM birthright_db.accounts, birthright_db.login where user_id = student_id and verified='1' and tag = '2'
	and last_name LIKE '".$search."%'
	";
	}
	// tuition
	else if ($_POST["DoesNotMatter2"] == "tuition"){
	if ($searchz != "" and $searchx != "") {
	$results = "
	SELECT student_id, first_name, last_name, month1, month2, month3, month4, month5, month6, month7, month8, month9, total_tuition, downpayment, total_payment, balance, monthly_payment, late_payer, fully_paid, tag, user_id FROM birthright_db.accounts, birthright_db.login where user_id = student_id and verified='1' and tag = '2'
	and last_name LIKE '".$search."%'
	and total_tuition >= '".$searchz."' and total_tuition <= '".$searchx."'
	";
	}
	else if ($searchx == "") {
	$results = "
	SELECT student_id, first_name, last_name, month1, month2, month3, month4, month5, month6, month7, month8, month9, total_tuition, downpayment, total_payment, balance, monthly_payment, late_payer, fully_paid, tag, user_id FROM birthright_db.accounts, birthright_db.login where user_id = student_id and verified='1' and tag = '2'
	and last_name LIKE '".$search."%'
	and total_tuition >= '".$searchz."'
	";
	}
	else if ($searchz == "") {
	$results = "
	SELECT student_id, first_name, last_name, month1, month2, month3, month4, month5, month6, month7, month8, month9, total_tuition, downpayment, total_payment, balance, monthly_payment, late_payer, fully_paid, tag, user_id FROM birthright_db.accounts, birthright_db.login where user_id = student_id and verified='1' and tag = '2'
	and last_name LIKE '".$search."%'
	and total_tuition <= '".$searchx."'
	";
	}
	}
	// tuition
	
	// downpayment
	else if ($_POST["DoesNotMatter2"] == "downpayment"){
	if ($searchz != "" and $searchx != "") {
	$results = "
	SELECT student_id, first_name, last_name, month1, month2, month3, month4, month5, month6, month7, month8, month9, total_tuition, downpayment, total_payment, balance, monthly_payment, late_payer, fully_paid, tag, user_id FROM birthright_db.accounts, birthright_db.login where user_id = student_id and verified='1' and tag = '2'
	and last_name LIKE '".$search."%'
	and downpayment >= '".$searchz."' and downpayment <= '".$searchx."'
	";
	}
	else if ($searchx == "") {
	$results = "
	SELECT student_id, first_name, last_name, month1, month2, month3, month4, month5, month6, month7, month8, month9, total_tuition, downpayment, total_payment, balance, monthly_payment, late_payer, fully_paid, tag, user_id FROM birthright_db.accounts, birthright_db.login where user_id = student_id and verified='1' and tag = '2'
	and last_name LIKE '".$search."%'
	and downpayment >= '".$searchz."'
	";
	}
	else if ($searchz == "") {
	$results = "
	SELECT student_id, first_name, last_name, month1, month2, month3, month4, month5, month6, month7, month8, month9, total_tuition, downpayment, total_payment, balance, monthly_payment, late_payer, fully_paid, tag, user_id FROM birthright_db.accounts, birthright_db.login where user_id = student_id and verified='1' and tag = '2'
	and last_name LIKE '".$search."%'
	and downpayment <= '".$searchx."'
	";
	}
	}
	// downpayment
	
	// month1
	else if ($_POST["DoesNotMatter2"] == "month1"){
	if ($searchz != "" and $searchx != "") {
	$results = "
	SELECT student_id, first_name, last_name, month1, month2, month3, month4, month5, month6, month7, month8, month9, total_tuition, downpayment, total_payment, balance, monthly_payment, late_payer, fully_paid, tag, user_id FROM birthright_db.accounts, birthright_db.login where user_id = student_id and verified='1' and tag = '2'
	and last_name LIKE '".$search."%'
	and month1 >= '".$searchz."' and month1 <= '".$searchx."'
	";
	}
	else if ($searchx == "") {
	$results = "
	SELECT student_id, first_name, last_name, month1, month2, month3, month4, month5, month6, month7, month8, month9, total_tuition, downpayment, total_payment, balance, monthly_payment, late_payer, fully_paid, tag, user_id FROM birthright_db.accounts, birthright_db.login where user_id = student_id and verified='1' and tag = '2'
	and last_name LIKE '".$search."%'
	and month1 >= '".$searchz."'
	";
	}
	else if ($searchz == "") {
	$results = "
	SELECT student_id, first_name, last_name, month1, month2, month3, month4, month5, month6, month7, month8, month9, total_tuition, downpayment, total_payment, balance, monthly_payment, late_payer, fully_paid, tag, user_id FROM birthright_db.accounts, birthright_db.login where user_id = student_id and verified='1' and tag = '2'
	and last_name LIKE '".$search."%'
	and month1 <= '".$searchx."'
	";
	}
	}
	// month1
	
	// month2
	else if ($_POST["DoesNotMatter2"] == "month2"){
	if ($searchz != "" and $searchx != "") {
	$results = "
	SELECT student_id, first_name, last_name, month1, month2, month3, month4, month5, month6, month7, month8, month9, total_tuition, downpayment, total_payment, balance, monthly_payment, late_payer, fully_paid, tag, user_id FROM birthright_db.accounts, birthright_db.login where user_id = student_id and verified='1' and tag = '2'
	and last_name LIKE '".$search."%'
	and month2 >= '".$searchz."' and month2 <= '".$searchx."'
	";
	}
	else if ($searchx == "") {
	$results = "
	SELECT student_id, first_name, last_name, month1, month2, month3, month4, month5, month6, month7, month8, month9, total_tuition, downpayment, total_payment, balance, monthly_payment, late_payer, fully_paid, tag, user_id FROM birthright_db.accounts, birthright_db.login where user_id = student_id and verified='1' and tag = '2'
	and last_name LIKE '".$search."%'
	and month2 >= '".$searchz."'
	";
	}
	else if ($searchz == "") {
	$results = "
	SELECT student_id, first_name, last_name, month1, month2, month3, month4, month5, month6, month7, month8, month9, total_tuition, downpayment, total_payment, balance, monthly_payment, late_payer, fully_paid, tag, user_id FROM birthright_db.accounts, birthright_db.login where user_id = student_id and verified='1' and tag = '2'
	and last_name LIKE '".$search."%'
	and month2 <= '".$searchx."'
	";
	}
	}
	// month2
	
	// month3
	else if ($_POST["DoesNotMatter2"] == "month3"){
	if ($searchz != "" and $searchx != "") {
	$results = "
	SELECT student_id, first_name, last_name, month1, month2, month3, month4, month5, month6, month7, month8, month9, total_tuition, downpayment, total_payment, balance, monthly_payment, late_payer, fully_paid, tag, user_id FROM birthright_db.accounts, birthright_db.login where user_id = student_id and verified='1' and tag = '2'
	and last_name LIKE '".$search."%'
	and month3 >= '".$searchz."' and month3 <= '".$searchx."'
	";
	}
	else if ($searchx == "") {
	$results = "
	SELECT student_id, first_name, last_name, month1, month2, month3, month4, month5, month6, month7, month8, month9, total_tuition, downpayment, total_payment, balance, monthly_payment, late_payer, fully_paid, tag, user_id FROM birthright_db.accounts, birthright_db.login where user_id = student_id and verified='1' and tag = '2'
	and last_name LIKE '".$search."%'
	and month3 >= '".$searchz."'
	";
	}
	else if ($searchz == "") {
	$results = "
	SELECT student_id, first_name, last_name, month1, month2, month3, month4, month5, month6, month7, month8, month9, total_tuition, downpayment, total_payment, balance, monthly_payment, late_payer, fully_paid, tag, user_id FROM birthright_db.accounts, birthright_db.login where user_id = student_id and verified='1' and tag = '2'
	and last_name LIKE '".$search."%'
	and month3 <= '".$searchx."'
	";
	}
	}
	// month3
	
	// month4
	else if ($_POST["DoesNotMatter2"] == "month4"){
	if ($searchz != "" and $searchx != "") {
	$results = "
	SELECT student_id, first_name, last_name, month1, month2, month3, month4, month5, month6, month7, month8, month9, total_tuition, downpayment, total_payment, balance, monthly_payment, late_payer, fully_paid, tag, user_id FROM birthright_db.accounts, birthright_db.login where user_id = student_id and verified='1' and tag = '2'
	and last_name LIKE '".$search."%'
	and month4 >= '".$searchz."' and month4 <= '".$searchx."'
	";
	}
	else if ($searchx == "") {
	$results = "
	SELECT student_id, first_name, last_name, month1, month2, month3, month4, month5, month6, month7, month8, month9, total_tuition, downpayment, total_payment, balance, monthly_payment, late_payer, fully_paid, tag, user_id FROM birthright_db.accounts, birthright_db.login where user_id = student_id and verified='1' and tag = '2'
	and last_name LIKE '".$search."%'
	and month4 >= '".$searchz."'
	";
	}
	else if ($searchz == "") {
	$results = "
	SELECT student_id, first_name, last_name, month1, month2, month3, month4, month5, month6, month7, month8, month9, total_tuition, downpayment, total_payment, balance, monthly_payment, late_payer, fully_paid, tag, user_id FROM birthright_db.accounts, birthright_db.login where user_id = student_id and verified='1' and tag = '2'
	and last_name LIKE '".$search."%'
	and month4 <= '".$searchx."'
	";
	}
	}
	// month4
	
	// month5
	else if ($_POST["DoesNotMatter2"] == "month5"){
	if ($searchz != "" and $searchx != "") {
	$results = "
	SELECT student_id, first_name, last_name, month1, month2, month3, month4, month5, month6, month7, month8, month9, total_tuition, downpayment, total_payment, balance, monthly_payment, late_payer, fully_paid, tag, user_id FROM birthright_db.accounts, birthright_db.login where user_id = student_id and verified='1' and tag = '2'
	and last_name LIKE '".$search."%'
	and month5 >= '".$searchz."' and month5 <= '".$searchx."'
	";
	}
	else if ($searchx == "") {
	$results = "
	SELECT student_id, first_name, last_name, month1, month2, month3, month4, month5, month6, month7, month8, month9, total_tuition, downpayment, total_payment, balance, monthly_payment, late_payer, fully_paid, tag, user_id FROM birthright_db.accounts, birthright_db.login where user_id = student_id and verified='1' and tag = '2'
	and last_name LIKE '".$search."%'
	and month5 >= '".$searchz."'
	";
	}
	else if ($searchz == "") {
	$results = "
	SELECT student_id, first_name, last_name, month1, month2, month3, month4, month5, month6, month7, month8, month9, total_tuition, downpayment, total_payment, balance, monthly_payment, late_payer, fully_paid, tag, user_id FROM birthright_db.accounts, birthright_db.login where user_id = student_id and verified='1' and tag = '2'
	and last_name LIKE '".$search."%'
	and month5 <= '".$searchx."'
	";
	}
	}
	// month5
	
	// month6
	else if ($_POST["DoesNotMatter2"] == "month6"){
	if ($searchz != "" and $searchx != "") {
	$results = "
	SELECT student_id, first_name, last_name, month1, month2, month3, month4, month5, month6, month7, month8, month9, total_tuition, downpayment, total_payment, balance, monthly_payment, late_payer, fully_paid, tag, user_id FROM birthright_db.accounts, birthright_db.login where user_id = student_id and verified='1' and tag = '2'
	and last_name LIKE '".$search."%'
	and month6 >= '".$searchz."' and month6 <= '".$searchx."'
	";
	}
	else if ($searchx == "") {
	$results = "
	SELECT student_id, first_name, last_name, month1, month2, month3, month4, month5, month6, month7, month8, month9, total_tuition, downpayment, total_payment, balance, monthly_payment, late_payer, fully_paid, tag, user_id FROM birthright_db.accounts, birthright_db.login where user_id = student_id and verified='1' and tag = '2'
	and last_name LIKE '".$search."%'
	and month6 >= '".$searchz."'
	";
	}
	else if ($searchz == "") {
	$results = "
	SELECT student_id, first_name, last_name, month1, month2, month3, month4, month5, month6, month7, month8, month9, total_tuition, downpayment, total_payment, balance, monthly_payment, late_payer, fully_paid, tag, user_id FROM birthright_db.accounts, birthright_db.login where user_id = student_id and verified='1' and tag = '2'
	and last_name LIKE '".$search."%'
	and month6 <= '".$searchx."'
	";
	}
	}
	// month6
	
	// month7
	else if ($_POST["DoesNotMatter2"] == "month7"){
	if ($searchz != "" and $searchx != "") {
	$results = "
	SELECT student_id, first_name, last_name, month1, month2, month3, month4, month5, month6, month7, month8, month9, total_tuition, downpayment, total_payment, balance, monthly_payment, late_payer, fully_paid, tag, user_id FROM birthright_db.accounts, birthright_db.login where user_id = student_id and verified='1' and tag = '2'
	and last_name LIKE '".$search."%'
	and month7 >= '".$searchz."' and month7 <= '".$searchx."'
	";
	}
	else if ($searchx == "") {
	$results = "
	SELECT student_id, first_name, last_name, month1, month2, month3, month4, month5, month6, month7, month8, month9, total_tuition, downpayment, total_payment, balance, monthly_payment, late_payer, fully_paid, tag, user_id FROM birthright_db.accounts, birthright_db.login where user_id = student_id and verified='1' and tag = '2'
	and last_name LIKE '".$search."%'
	and month7 >= '".$searchz."'
	";
	}
	else if ($searchz == "") {
	$results = "
	SELECT student_id, first_name, last_name, month1, month2, month3, month4, month5, month6, month7, month8, month9, total_tuition, downpayment, total_payment, balance, monthly_payment, late_payer, fully_paid, tag, user_id FROM birthright_db.accounts, birthright_db.login where user_id = student_id and verified='1' and tag = '2'
	and last_name LIKE '".$search."%'
	and month7 <= '".$searchx."'
	";
	}
	}
	// month7
	
	// month8
	else if ($_POST["DoesNotMatter2"] == "month8"){
	if ($searchz != "" and $searchx != "") {
	$results = "
	SELECT student_id, first_name, last_name, month1, month2, month3, month4, month5, month6, month7, month8, month9, total_tuition, downpayment, total_payment, balance, monthly_payment, late_payer, fully_paid, tag, user_id FROM birthright_db.accounts, birthright_db.login where user_id = student_id and verified='1' and tag = '2'
	and last_name LIKE '".$search."%'
	and month8 >= '".$searchz."' and month8 <= '".$searchx."'
	";
	}
	else if ($searchx == "") {
	$results = "
	SELECT student_id, first_name, last_name, month1, month2, month3, month4, month5, month6, month7, month8, month9, total_tuition, downpayment, total_payment, balance, monthly_payment, late_payer, fully_paid, tag, user_id FROM birthright_db.accounts, birthright_db.login where user_id = student_id and verified='1' and tag = '2'
	and last_name LIKE '".$search."%'
	and month8 >= '".$searchz."'
	";
	}
	else if ($searchz == "") {
	$results = "
	SELECT student_id, first_name, last_name, month1, month2, month3, month4, month5, month6, month7, month8, month9, total_tuition, downpayment, total_payment, balance, monthly_payment, late_payer, fully_paid, tag, user_id FROM birthright_db.accounts, birthright_db.login where user_id = student_id and verified='1' and tag = '2'
	and last_name LIKE '".$search."%'
	and month8 <= '".$searchx."'
	";
	}
	}
	// month8
	
	// month9
	else if ($_POST["DoesNotMatter2"] == "month9"){
	if ($searchz != "" and $searchx != "") {
	$results = "
	SELECT student_id, first_name, last_name, month1, month2, month3, month4, month5, month6, month7, month8, month9, total_tuition, downpayment, total_payment, balance, monthly_payment, late_payer, fully_paid, tag, user_id FROM birthright_db.accounts, birthright_db.login where user_id = student_id and verified='1' and tag = '2'
	and last_name LIKE '".$search."%'
	and month9 >= '".$searchz."' and month9 <= '".$searchx."'
	";
	}
	else if ($searchx == "") {
	$results = "
	SELECT student_id, first_name, last_name, month1, month2, month3, month4, month5, month6, month7, month8, month9, total_tuition, downpayment, total_payment, balance, monthly_payment, late_payer, fully_paid, tag, user_id FROM birthright_db.accounts, birthright_db.login where user_id = student_id and verified='1' and tag = '2'
	and last_name LIKE '".$search."%'
	and month9 >= '".$searchz."'
	";
	}
	else if ($searchz == "") {
	$results = "
	SELECT student_id, first_name, last_name, month1, month2, month3, month4, month5, month6, month7, month8, month9, total_tuition, downpayment, total_payment, balance, monthly_payment, late_payer, fully_paid, tag, user_id FROM birthright_db.accounts, birthright_db.login where user_id = student_id and verified='1' and tag = '2'
	and last_name LIKE '".$search."%'
	and month9 <= '".$searchx."'
	";
	}
	}
	// month9
	
	// balance
	else if ($_POST["DoesNotMatter2"] == "balance"){
	if ($searchz != "" and $searchx != "") {
	$results = "
	SELECT student_id, first_name, last_name, month1, month2, month3, month4, month5, month6, month7, month8, month9, total_tuition, downpayment, total_payment, balance, monthly_payment, late_payer, fully_paid, tag, user_id FROM birthright_db.accounts, birthright_db.login where user_id = student_id and verified='1' and tag = '2'
	and last_name LIKE '".$search."%'
	and balance >= '".$searchz."' and balance <= '".$searchx."'
	";
	}
	else if ($searchx == "") {
	$results = "
	SELECT student_id, first_name, last_name, month1, month2, month3, month4, month5, month6, month7, month8, month9, total_tuition, downpayment, total_payment, balance, monthly_payment, late_payer, fully_paid, tag, user_id FROM birthright_db.accounts, birthright_db.login where user_id = student_id and verified='1' and tag = '2'
	and last_name LIKE '".$search."%'
	and balance >= '".$searchz."'
	";
	}
	else if ($searchz == "") {
	$results = "
	SELECT student_id, first_name, last_name, month1, month2, month3, month4, month5, month6, month7, month8, month9, total_tuition, downpayment, total_payment, balance, monthly_payment, late_payer, fully_paid, tag, user_id FROM birthright_db.accounts, birthright_db.login where user_id = student_id and verified='1' and tag = '2'
	and last_name LIKE '".$search."%'
	and balance <= '".$searchx."'
	";
	}
	}
	// balance
	
	// monthlypayment
	else if ($_POST["DoesNotMatter2"] == "monthlypayment"){
	if ($searchz != "" and $searchx != "") {
	$results = "
	SELECT student_id, first_name, last_name, month1, month2, month3, month4, month5, month6, month7, month8, month9, total_tuition, downpayment, total_payment, balance, monthly_payment, late_payer, fully_paid, tag, user_id FROM birthright_db.accounts, birthright_db.login where user_id = student_id and verified='1' and tag = '2'
	and last_name LIKE '".$search."%'
	and monthly_payment >= '".$searchz."' and monthly_payment <= '".$searchx."'
	";
	}
	else if ($searchx == "") {
	$results = "
	SELECT student_id, first_name, last_name, month1, month2, month3, month4, month5, month6, month7, month8, month9, total_tuition, downpayment, total_payment, balance, monthly_payment, late_payer, fully_paid, tag, user_id FROM birthright_db.accounts, birthright_db.login where user_id = student_id and verified='1' and tag = '2'
	and last_name LIKE '".$search."%'
	and monthly_payment >= '".$searchz."'
	";
	}
	else if ($searchz == "") {
	$results = "
	SELECT student_id, first_name, last_name, month1, month2, month3, month4, month5, month6, month7, month8, month9, total_tuition, downpayment, total_payment, balance, monthly_payment, late_payer, fully_paid, tag, user_id FROM birthright_db.accounts, birthright_db.login where user_id = student_id and verified='1' and tag = '2'
	and last_name LIKE '".$search."%'
	and monthly_payment <= '".$searchx."'
	";
	}
	}
	// monthlypayment
	
	
	}
	
	// last_name territory
	
	
	
	//final else - default display
	else
	{
		$results = "SELECT student_id, first_name, last_name, month1, month2, month3, month4, month5, month6, month7, month8, month9, total_tuition, downpayment, total_payment, balance, monthly_payment, late_payer, fully_paid, tag, user_id FROM birthright_db.accounts, birthright_db.login where user_id = student_id and verified='1' and tag = '2'";
	}
	//final else - default display
?>