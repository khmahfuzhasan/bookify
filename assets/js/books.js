const modalContainer = document.querySelector('#books');
const tablebody = document.querySelector('#tb-books tbody');
const bookmodal = document.querySelector('#books-model');
const modalhead = document.querySelector('#modalhead');
const bookname = document.querySelector('#bookname');
const bookauth = document.querySelector('#bookauth');
const bookprice = document.querySelector('#bookprice');
const totalAmountBtn = document.querySelector('#totalAmount');

const booknameError = document.querySelector('.booknameError');
const bookauthError = document.querySelector('.bookauthError');
const bookpriceError = document.querySelector('.bookpriceError');
const booksuccess = document.querySelector('.success');
const bookdanger = document.querySelector('.danger');

let bookNameStatus = true;
let bookAuthStatus = true;
let bookPriceStatus = true;

function FetchBooks(){
	$.ajax({
		type: 'GET',
		url: 'classes/FetchBooks.php',
		data: {trigered: 'FetchBooks'},
		success: (response,status)=>{
			result ="";
			totalAmount=0;
			totalBooks=0;
			res = JSON.parse(response);
			if(res.status){
				res.data.forEach((book)=>{
					totalAmount+= parseInt(book.book_price);
					totalBooks++;
					result+=`<tr>
							<td>${book.book_name}</td>
							<td>${book.auth_name}</td>
							<td><div class="dollor">$${book.book_price}</div></td>
						    <td><a id="updateBookBtn" href="" class="btn btn-warning btn-small" onclick="updateBook(${book.id}, '${book.book_name}','${book.auth_name}',${book.book_price});">Edit<span>&#9998;</span></a></td>
						    <td><a id="deleteBookbtn" href="" onclick="deleteBook(${book.id})" class="btn btn-danger btn-small">Delete<span>&#10006;</span></a></td>
						</tr>`;

				totalAmountBtn.innerHTML ='Total Amount<h2>$'+totalAmount+'</h2>';
				totalBooksBtn.innerHTML ='Total Books<h2>'+totalBooks+'</h2>';
				});
			}else{
				result =`<tr><td colspan="5" style="text-align:center;color:gray;border:none;">${res.message}</td></tr>`;
				totalAmountBtn.innerHTML ='Total Amount<h2>'+$0+'</h2>';
				totalBooksBtn.innerHTML ='Total Books<h2>'+0+'</h2>';
			}
			tablebody.innerHTML = result;
			const updateBookBtn = document.querySelectorAll("#updateBookBtn");
			updateBookBtn.forEach((update)=>{
				update.addEventListener('click',(event)=>{
					event.preventDefault();
					modalBox();
				});
			});
			const deleteBookBtn = document.querySelectorAll("#deleteBookbtn");
			deleteBookBtn.forEach((del)=>{
				del.addEventListener('click',(event)=>{
					event.preventDefault();
				});
			});
			
		}
	});
	
}
FetchBooks();
function deleteBook(id){
	$.ajax({
		type: 'POST',
		url:'classes/deleteBooks.php',
		data: {
			delete: true,
			id: id,
		},
		success: (response,status,object)=>{
			res = JSON.parse(response);
			if(res.status){
				booksuccess.style.display = 'block';
				booksuccess.innerHTML = "<div class='alert-icon'><div class='alertIcon'>&check;</div></div><p>"+res.message+"</p>";
				FetchBooks();
				timeOut();			
			}
		}
	}).fail((object,status, data)=>{
		//console.log(object,status, data);
	});
	
}

function updateBook(id,name,auth,price){
	modalhead.innerHTML = "Update Book";
	bookname.value = name;
	bookauth.value = auth;
	bookprice.value= price;
	addbook.style.display="none";
	updatebookBtn.style.display="block";
	updatebookBtn.addEventListener('click',(event)=>{
		event.preventDefault();
		updateBookname = bookname.value.trim();
		updateBookauth = bookauth.value.trim();
		updateBookprice = bookprice.value.trim();
		$.ajax({
			type: 'POST',
			url:'classes/updateBooks.php',
			data: {
				update: true,
				id: id,
				name:updateBookname,
				auth:updateBookauth,
				price:updateBookprice
			},
			success: (response,status,object)=>{
					res = JSON.parse(response);
				modalContainer.style.display = 'none';
				booksuccess.style.display = 'block';
				booksuccess.innerHTML = "<div class='alert-icon'><div class='alertIcon'>&check;</div></div><p>"+res.message+"</p>"; 
				FetchBooks();
				bookform.reset();
				timeOut();				
			}
		}).fail((object,status, data)=>{
			//console.log(object,status, data);
		});
	});	
}

if(bookform !== null){
	
//books.style.display='none';
addbook.addEventListener("click",(event)=>{
	event.preventDefault();
//bookNameStatus check
if(Empty(bookname, "Book Name",booknameError)){
	if(Minchar(bookname, "Book Name",booknameError, 5)){
		if(BookChar(bookname, "Book Name",booknameError)){
			bookNameStatus = false;
		}else{
			bookNameStatus = true;
			
;		}
	}else{
		bookNameStatus = true;
	}
}else{
	bookNameStatus = true;
}
//bookAuthStatus check
if(Empty(bookauth, "Author Name",bookauthError)){
	if(Minchar(bookauth, "Author Name",bookauthError, 5)){
		if(BookChar(bookauth, "Author Name",bookauthError)){
			bookAuthStatus = false;
		}else{
			bookAuthStatus = true;
		}
	}else{
		bookAuthStatus = true;
	}
}else{
	bookAuthStatus = true;
}

//bookPriceStatus check
if(Empty(bookprice, "Book Price",bookpriceError)){
	if(Minchar(bookprice, "Book Price",bookpriceError, 2)){
		if(BookPrice(bookprice, "Book Price",bookpriceError)){
			bookPriceStatus = false;
		}else{
			bookPriceStatus = true;
		}
	}else{
		bookPriceStatus = true;
	}
}else{
	bookPriceStatus = true;
}


if(bookNameStatus && bookAuthStatus && bookPriceStatus){
	//console.log("Error!");
}else{
	InsertBook(bookform,bookname,bookauth,bookprice,booksuccess,bookdanger,modalContainer);
}


});
}// Modal Exist Or not
