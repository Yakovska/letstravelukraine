function Component(){

		
	this.elem = null;//ссылка на все html элементы интерфейса с которыми работает JS-компонент(обзщее для всех элементов которые будут наследоваться от component)
	this.init = function(sSelector){//инициализация основного свойства elem
		this.elem = $(sSelector); 
	if(!this.elem.length){//отладчик ошибки доступа к главному селектору, если объект не имеет длинны т.е undefind
			/*alert("Can't access element by selector: " + sSelector);*/
		}
		this.find = function(sSelector){// selector  - класс, прописанный в find элемента // пишем свой метод find для сокращения записей в скриптах
			var findResult = this.elem.find(sSelector);
			if(findResult.length){
			return findResult;
		}
			/*else{
			alert("Can't find element by selector: " + sSelector);
			}*/
		}
		
		
	}
	
}