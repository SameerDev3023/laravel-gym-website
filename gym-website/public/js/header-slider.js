$(document).ready(function(){
	function headerSlider() {
		var imgArr = [
			'https://images.unsplash.com/photo-1546483875-ad9014c88eba?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1564&q=80',
			'https://images.unsplash.com/photo-1571388208497-71bedc66e932?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1772&q=80',
			'https://images.unsplash.com/photo-1571388072750-31a921b3d900?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1450&q=80',
			'https://images.unsplash.com/photo-1434754205268-ad3b5f549b11?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1774&q=80',
			'https://images.unsplash.com/photo-1570814711460-37751a607241?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1770&q=80',
			'https://images.unsplash.com/photo-1581460484520-bc7c3f533c9e?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1770&q=80',
		];  
		let i = 0;
		let header = $('header');
		header.css({ "background-image": "url('" + imgArr[i] + "')" });	  
		setInterval(function () {
		  header.show(3000, function () {
			header.css({ "background-image": "url('" + imgArr[i] + "')" });
			 
		  });
		  i = (i + 1) % imgArr.length;
		}, 3000); // Change image every 5 seconds
	  }	  
	  headerSlider();
})