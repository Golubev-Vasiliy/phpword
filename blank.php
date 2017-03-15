<?php
	class Blank
	{
		var $surname;
		var $name;
		var $patron;
		var $address;
		var $series;
		var $number;
		var $phoneNumber;
		var $email;

		function setSurname($surname)
		{
			$this -> surname = $surname;
		}
		function setName($name)
		{
			$this -> name = $name;
		}
		function setPatron($patron)
		{
			$this -> patron = $patron;
		}
		function setAddress($address)
		{
			$this -> address = $address;
		}
		function setSeries($series)
		{
			$this -> series = $series;
		}
		function setNumber($number)
		{
			$this -> number = $number;
		}
		function setPhoneNumber($phoneNumber)
		{
			$this -> phoneNumber = $phoneNumber;
		}
		function setEmail($email)
		{
			$this -> email = $email;
		}

		function declaration()
		{
			$textcolor = array(0, 0, 0);

			$pdf = new mPDF('utf-8', 'P', 'mm', 'A4');
			$pdf -> SetTextColor($textcolor[0], $textcolor[1], $textcolor[2]);
			$pdf -> SetFont('Arial', 'B', 14);
			$pdf -> AddPage();
			$pdf -> Cell( 0, 0, "Заявление о предоставлении государственной услуги содействия", 0, 1, 'C' );
			$pdf -> Cell( 0, 15, "гражданам в поиске подходящей работы", 0, 1, 'C' );
			$pdf -> SetFont('Arial', '', 12);
			$pdf -> Cell(15);
			$pdf -> Cell(0, 5, "Я, " . $this -> surname . " " . $this -> name . " " . $this -> patron . " прошу предоставить государственную услугу", 0, 1, 'L' );
			$pdf -> Cell(0, 5, "содействия гражданам в поиске подходящей работы.", 0, 1, 'L' );
			$pdf -> Cell(0, 9, "Адрес места жительства: " . $this -> address. ".", 0, 1, 'L' );
			$pdf -> Cell(0, 3, "Документ, удостоверяющий личность: паспорт.", 0, 1, 'L' );
			$pdf -> Cell(0, 5, "серия: " . $this -> series . ", номер: " . $this -> number . ".", 0, 1, 'L' );
			$pdf -> Cell(0, 5, "Номер контактного телефона:", 0, 1, 'L' );
			$pdf -> Cell(0, 5, "    " . $this -> phoneNumber, 0, 1, 'L' );
			$pdf -> Cell(0, 5, "Адрес электронной почты:", 0, 1, 'L' );
			$pdf -> Cell(0, 5, "    " . $this -> email, 0, 1, 'L' );
			$pdf -> Cell(0, 5, "Согласен на обработку и передачу работодателям моих персональных данных в ", 0, 1, 'L' );
			$pdf -> Cell(0, 5, "соответствии с Федеральным законом от 27 июля 2006 года №152-ФЗ «О персональных", 0, 1, 'L' );
			$pdf -> Cell(0, 5, "данных».", 0, 1, 'L' );
			$pdf -> ln(20);
			$pdf -> Cell(0, 5, $date = date("d.m.Y"), 0, 0, 'L' );
			$pdf -> Cell(0, 0, "________________________", 0, 1, 'R' );
			$pdf -> SetFont('Arial', '', 10);
			$pdf -> Cell(0, 9, "(Подпись)               ", 0, 1, 'R' );
			$pdf -> Output("report.pdf", "I" );
		}

		function declaration2()
		{
			$pdf = new mPDF('utf-8', 'P', 'mm', 'A4');
			$pdf -> SetTextColor($textcolor[0], $textcolor[1], $textcolor[2]);
			$pdf -> SetFont('Arial', 'B', 14);
			$pdf -> AddPage();
			$pdf -> Cell( 0, 0, "Счет за заявление о предоставлении государственной услуги", 0, 1, 'C' );
			$pdf -> Cell( 0, 15, "содействия гражданам в поиске подходящей работы", 0, 1, 'C' );
			$pdf -> SetFont('Arial', '', 12);
			$pdf -> Cell(15);
			$pdf -> Cell(0, 5, "Ф.И.О. заказчика: " . $this -> surname . " " . $this -> name . " " . $this -> patron . ".", 0, 1, 'L' );
			$pdf -> Cell(0, 9, "Адрес места жительства: " . $this -> address. ".", 0, 1, 'L' );
			$pdf -> Cell(0, 3, "Документ, удостоверяющий личность: паспорт.", 0, 1, 'L' );
			$pdf -> Cell(0, 5, "серия: " . $this -> series . ", номер: " . $this -> number . ".", 0, 1, 'L' );
			$pdf -> Cell(0, 5, "Номер контактного телефона:", 0, 1, 'L' );
			$pdf -> Cell(0, 5, "    " . $this -> phoneNumber, 0, 1, 'L' );
			$pdf -> Cell(0, 5, "Адрес электронной почты:", 0, 1, 'L' );
			$pdf -> Cell(0, 5, "    " . $this -> email, 0, 1, 'L' );
			$pdf -> ln(10);
			$pdf -> Cell(0, 5, "Оплатить", 0, 0, 'L' );
			$pdf -> Cell(0, 0, "100 рублей", 0, 1, 'R' );
			$pdf -> ln(10);
			$pdf -> Cell(0, 5, $date = date("d.m.Y"), 0, 0, 'L' );
			$pdf -> Cell(0, 0, "________________________", 0, 1, 'R' );
			$pdf -> SetFont('Arial', '', 10);
			$pdf -> Cell(0, 9, "(Подпись)               ", 0, 1, 'R' );   

			$pdf -> Output("report.pdf", "I" );
		}

		function destroy()
		{
			unset($Blank);
		}


	}
?>