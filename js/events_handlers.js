const is_there_a_table = function () {
	let table = document.getElementById('table');
	return Boolean(table);
};

const get_changing_elems = function () {
	let create_button = document.getElementsByClassName('create')[0];
	let add_button = document.getElementsByClassName('add')[0];
	let remove_form = document.getElementById('delete');
	let table_header = document.getElementsByClassName('header')[0];
	let remove_button = remove_form.getElementsByTagName('button')[0];
	let remove_field = remove_form.getElementsByTagName('div')[0];

	return {
		create_button,
		add_button,
		remove_button,
		remove_field,
		table_header,
	}
};

const set_table_condition = function (changing_elems) {
	changing_elems.add_button.disabled = false;
	changing_elems.remove_button.disabled = false;
	changing_elems.remove_field.classList.remove('disabled');
	changing_elems.table_header.classList.remove('disabled');
};

const set_no_table_condition = function (changing_elems) {
	changing_elems.add_button.disabled = true;
	changing_elems.remove_button.disabled = true;
	changing_elems.remove_field.classList.add('disabled');
	changing_elems.table_header.classList.add('disabled');
};

const create_t = function() {
	let table = document.createElement('table');
	let thead = document.createElement('thead');
	let tbody = document.createElement('tbody');

	let table_head = [
		"#",
		"First",
		"Last",
	];

	let t_head_row = document.createElement('tr');

	for (let i = 0; i < table_head.length; i++) {
		let heading = document.createElement('th');
		heading.innerHTML = table_head[i];
		t_head_row.appendChild(heading);
	}

	thead.appendChild(t_head_row);

	let table_rows = [
		["Mark", "Otto"],
	];

	for (let i = 0; i < table_rows.length; i++) {
		let rowElement = document.createElement('tr');

		let row_num = document.createElement('td');
		row_num.innerHTML = String(i + 1);
		rowElement.appendChild(row_num);

		for (let j = 0; j < table_rows[0].length; j++) {
			let data = document.createElement('td');
			data.innerHTML = table_rows[i][j];
			rowElement.appendChild(data);
		}

		tbody.appendChild(rowElement);
	}

	table.appendChild(thead);
	table.appendChild(tbody);

	table.id = "table"
	table.classList.add("table")

	return table;
};

const insertAfter = function (referenceNode, newNode) {
	referenceNode.parentNode.insertBefore(newNode, referenceNode.nextSibling);
};

const create_table_event = function () {
	if (is_there_a_table()) alert("На странице уже есть таблица!");
	else {
		insertAfter(
			document.getElementsByTagName("main")[0].getElementsByClassName("header")[0],
			create_t()
		);
		set_table_condition(get_changing_elems());
	}
};

const push_new_row = function () {
	let tbody = document.getElementsByTagName('tbody')[0];

	let new_row = document.createElement('tr');
	let new_row_num = String(
		tbody.getElementsByTagName('tr').length + 1
	);

	let td_num = document.createElement('td');
	td_num.innerHTML = new_row_num;

	let row_content = [
		"Name" + String(new_row_num),
		"Surname" + String(new_row_num),
	];
	new_row.appendChild(td_num);
	for (let i = 0; i < row_content.length; i++) {
		let td = document.createElement('td');
		td.innerHTML = row_content[i];
		new_row.appendChild(td);
	}

	tbody.appendChild(new_row);
};

const add_row_event = function () {
	push_new_row();
};

const remove_elem = function (elem) {
	elem.parentNode.removeChild(elem);
}

const remove_selected_row = function (number) {
	let rows = document.getElementsByTagName('tbody')[0].getElementsByTagName('tr');
	if (number < 1 || number > rows.length) alert("Вы вышли за пределы таблицы, такой строки нет!");
	else remove_elem(rows[number - 1]);
	if (rows.length === 0) {
		remove_elem(document.getElementsByTagName('table')[0]);
		set_no_table_condition(get_changing_elems());
	}
};
const remove_row_event = function () {
	let form_data = document.getElementById("row_number").value;
	const is_int = /^[0-9]+$/i;
	if (!is_int.test(form_data)) alert("Введите целое число!");

	else remove_selected_row(Number(form_data));
};

$(function () {
	let changing_elems = get_changing_elems();

	if (is_there_a_table()) set_table_condition(changing_elems);
	else set_no_table_condition(changing_elems);

	changing_elems.create_button.addEventListener("click", create_table_event);
	changing_elems.add_button.addEventListener("click", add_row_event);
	changing_elems.remove_button.addEventListener("click", remove_row_event);
});