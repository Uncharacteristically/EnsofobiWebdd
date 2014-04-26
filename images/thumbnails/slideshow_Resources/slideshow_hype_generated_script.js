//	HYPE.documents["slideshow"]

(function HYPE_DocumentLoader() {
	var resourcesFolderName = "slideshow_Resources";
	var documentName = "slideshow";
	var documentLoaderFilename = "slideshow_hype_generated_script.js";

	// find the URL for this script's absolute path and set as the resourceFolderName
	try {
		var scripts = document.getElementsByTagName('script');
		for(var i = 0; i < scripts.length; i++) {
			var scriptSrc = scripts[i].src;
			if(scriptSrc != null && scriptSrc.indexOf(documentLoaderFilename) != -1) {
				resourcesFolderName = scriptSrc.substr(0, scriptSrc.lastIndexOf("/"));
				break;
			}
		}
	} catch(err) {	}

	// Legacy support
	if (typeof window.HYPE_DocumentsToLoad == "undefined") {
		window.HYPE_DocumentsToLoad = new Array();
	}
 
	// load HYPE.js if it hasn't been loaded yet
	if(typeof HYPE_100 == "undefined") {
		if(typeof window.HYPE_100_DocumentsToLoad == "undefined") {
			window.HYPE_100_DocumentsToLoad = new Array();
			window.HYPE_100_DocumentsToLoad.push(HYPE_DocumentLoader);

			var headElement = document.getElementsByTagName('head')[0];
			var scriptElement = document.createElement('script');
			scriptElement.type= 'text/javascript';
			scriptElement.src = resourcesFolderName + '/' + 'HYPE.js?hype_version=100';
			headElement.appendChild(scriptElement);
		} else {
			window.HYPE_100_DocumentsToLoad.push(HYPE_DocumentLoader);
		}
		return;
	}
	
	var hypeDoc = new HYPE_100();
	
	var attributeTransformerMapping = {b:"i",c:"i",bC:"i",d:"i",aS:"i",M:"i",e:"f",N:"i",f:"d",aT:"i",O:"i",g:"c",aU:"i",P:"i",Q:"i",aV:"i",R:"c",aW:"f",aI:"i",S:"i",T:"i",l:"d",aX:"i",aJ:"i",m:"c",n:"c",aK:"i",X:"i",aZ:"i",A:"c",Y:"i",aL:"i",B:"c",C:"c",D:"c",t:"i",E:"i",G:"c",bA:"c",a:"i",bB:"i"};

var scenes = [{initialValues:{"7":{c:116,d:16,I:"Solid",e:"0.465035",J:"Solid",K:"Solid",g:"#FF8B31",L:"Solid",aP:"pointer",M:1,w:"",N:1,A:"#A0A0A0",x:"visible",j:"absolute",O:1,P:1,B:"#A0A0A0",C:"#A0A0A0",k:"div",aA:{type:1,sceneOid:"14",transition:5},D:"#A0A0A0",z:"6",a:166,b:21},"3":{o:"content-box",h:"t_4.jpg",x:"visible",a:120,q:"100% 100%",b:55,j:"absolute",r:"inline",c:100,k:"div",z:"2",d:100},"8":{c:116,d:16,I:"Solid",e:"0.465035",J:"Solid",K:"Solid",g:"#FF8B31",L:"Solid",M:1,N:1,A:"#A0A0A0",x:"visible",j:"absolute",O:1,P:1,B:"#A0A0A0",C:"#A0A0A0",k:"div",aB:{type:1,sceneOid:"29",transition:5},D:"#A0A0A0",z:"7",a:322,b:21},"4":{o:"content-box",h:"t_5.jpg",x:"visible",a:230,q:"100% 100%",b:55,j:"absolute",r:"inline",c:100,k:"div",z:"3",d:100},"11":{o:"content-box",h:"t_5.jpg",x:"visible",a:340,q:"100% 100%",b:173,j:"absolute",r:"inline",c:100,k:"div",z:"10",d:100},"9":{o:"content-box",h:"t_6.jpg",x:"visible",a:120,q:"100% 100%",b:171,j:"absolute",r:"inline",c:100,k:"div",z:"8",d:100},"5":{o:"content-box",h:"t_3.jpg",x:"visible",a:340,q:"100% 100%",b:55,j:"absolute",r:"inline",c:100,k:"div",z:"4",d:100},"12":{o:"content-box",h:"t_3.jpg",x:"visible",a:230,q:"100% 100%",b:173,j:"absolute",r:"inline",c:100,k:"div",z:"11",d:100},"6":{c:116,d:16,I:"Solid",J:"Solid",K:"Solid",g:"#FF8B31",L:"Solid",M:1,N:1,A:"#A0A0A0",x:"visible",j:"absolute",B:"#A0A0A0",P:1,O:1,C:"#A0A0A0",k:"div",z:"5",D:"#A0A0A0",a:10,b:21},"2":{o:"content-box",h:"t_6.jpg",x:"visible",a:10,q:"100% 100%",b:55,j:"absolute",r:"inline",c:100,k:"div",z:"1",d:100},"10":{o:"content-box",h:"t_4.jpg",x:"visible",a:10,q:"100% 100%",b:171,j:"absolute",r:"inline",c:100,k:"div",z:"9",d:100}},onSceneKeyDownAction:{type:1,sceneOid:"14",transition:1},onSceneKeyPressAction:{type:1,sceneOid:"14",transition:1},timelines:{"26":{framesPerSecond:30,animations:[],identifier:"26",name:"box",duration:0},kTimelineDefaultIdentifier:{framesPerSecond:30,animations:[],identifier:"kTimelineDefaultIdentifier",name:"Main Timeline",duration:0}},sceneIndex:0,perspective:"600px",oid:"1",onSceneAnimationCompleteAction:{type:0},backgroundColor:"#FFFFFF",name:"Untitled Scene"},{timelines:{kTimelineDefaultIdentifier:{framesPerSecond:30,animations:[],identifier:"kTimelineDefaultIdentifier",name:"Main Timeline",duration:0}},sceneIndex:1,perspective:"600px",oid:"14",initialValues:{"21":{c:116,d:16,I:"Solid",e:"0.465035",J:"Solid",K:"Solid",g:"#FF8B31",L:"Solid",aP:"pointer",M:1,N:1,A:"#A0A0A0",x:"visible",j:"absolute",O:1,P:1,B:"#A0A0A0",C:"#A0A0A0",k:"div",aA:{type:1,sceneOid:"29",transition:5},D:"#A0A0A0",z:"7",a:322,b:21},"24":{o:"content-box",h:"t_5.jpg",x:"visible",a:340,q:"100% 100%",b:173,j:"absolute",r:"inline",c:100,k:"div",z:"10",d:100},"19":{c:116,d:16,I:"Solid",J:"Solid",K:"Solid",g:"#FF8B31",L:"Solid",M:1,N:1,A:"#A0A0A0",x:"visible",j:"absolute",B:"#A0A0A0",P:1,O:1,C:"#A0A0A0",k:"div",z:"5",D:"#A0A0A0",a:166,b:21},"27":{o:"content-box",h:"t_5.jpg",x:"visible",a:120,q:"100% 100%",b:55,j:"absolute",r:"inline",c:100,k:"div",z:"12",d:100},"22":{o:"content-box",h:"t_6.jpg",x:"visible",a:120,q:"100% 100%",b:171,j:"absolute",r:"inline",c:100,k:"div",z:"8",d:100},"17":{o:"content-box",h:"t_5.jpg",x:"visible",a:230,q:"100% 100%",b:55,j:"absolute",r:"inline",c:100,k:"div",z:"3",d:100},"25":{o:"content-box",h:"t_3.jpg",x:"visible",a:230,q:"100% 100%",b:173,j:"absolute",r:"inline",c:100,k:"div",z:"11",d:100},"20":{c:116,d:16,I:"Solid",e:"0.465035",J:"Solid",K:"Solid",g:"#FF8B31",L:"Solid",aP:"pointer",M:1,N:1,A:"#A0A0A0",x:"visible",j:"absolute",O:1,P:1,B:"#A0A0A0",C:"#A0A0A0",k:"div",aA:{type:1,sceneOid:"1",transition:4},D:"#A0A0A0",z:"6",a:10,b:21},"28":{o:"content-box",h:"t_5.jpg",x:"visible",a:10,q:"100% 100%",b:55,j:"absolute",r:"inline",c:100,k:"div",z:"13",d:100},"23":{o:"content-box",h:"t_4.jpg",x:"visible",a:10,q:"100% 100%",b:171,j:"absolute",r:"inline",c:100,k:"div",z:"9",d:100},"18":{o:"content-box",h:"t_3.jpg",x:"visible",a:340,q:"100% 100%",b:55,j:"absolute",r:"inline",c:100,k:"div",z:"4",d:100}},backgroundColor:"#FFFFFF",name:"Untitled Scene 2"},{timelines:{kTimelineDefaultIdentifier:{framesPerSecond:30,animations:[],identifier:"kTimelineDefaultIdentifier",name:"Main Timeline",duration:0}},sceneIndex:2,perspective:"600px",oid:"29",initialValues:{"39":{c:116,d:16,I:"Solid",J:"Solid",K:"Solid",g:"#FF8B31",L:"Solid",M:1,N:1,A:"#A0A0A0",x:"visible",j:"absolute",B:"#A0A0A0",P:1,O:1,C:"#A0A0A0",k:"div",z:"3",D:"#A0A0A0",a:322,b:21},"47":{o:"content-box",h:"t_5.jpg",x:"visible",a:10,q:"100% 100%",b:55,j:"absolute",r:"inline",c:100,k:"div",z:"11",d:100},"50":{o:"content-box",h:"t_3.jpg",x:"visible",a:120,q:"100% 100%",b:171,j:"absolute",r:"inline",c:100,k:"div",z:"14",d:100},"45":{o:"content-box",h:"t_3.jpg",x:"visible",a:230,q:"100% 100%",b:172,j:"absolute",r:"inline",c:100,k:"div",z:"9",d:100},"40":{c:116,d:16,I:"Solid",e:"0.465035",J:"Solid",K:"Solid",g:"#FF8B31",L:"Solid",aP:"pointer",M:1,N:1,A:"#A0A0A0",x:"visible",j:"absolute",O:1,P:1,B:"#A0A0A0",C:"#A0A0A0",k:"div",aA:{type:1,sceneOid:"1",transition:4},D:"#A0A0A0",z:"4",a:10,b:21},"48":{o:"content-box",h:"t_3.jpg",x:"visible",a:230,q:"100% 100%",b:56,j:"absolute",r:"inline",c:100,k:"div",z:"12",d:100},"43":{o:"content-box",h:"t_4.jpg",x:"visible",a:10,q:"100% 100%",b:171,j:"absolute",r:"inline",c:100,k:"div",z:"7",d:100},"38":{o:"content-box",h:"t_3.jpg",x:"visible",a:340,q:"100% 100%",b:55,j:"absolute",r:"inline",c:100,k:"div",z:"2",d:100},"41":{c:116,d:16,I:"Solid",e:"0.465035",J:"Solid",K:"Solid",g:"#FF8B31",L:"Solid",aP:"pointer",M:1,N:1,A:"#A0A0A0",x:"visible",j:"absolute",O:1,P:1,B:"#A0A0A0",C:"#A0A0A0",k:"div",aA:{type:1,sceneOid:"14",transition:4},D:"#A0A0A0",z:"5",a:166,b:21},"49":{o:"content-box",h:"t_3.jpg",x:"visible",a:120,q:"100% 100%",b:55,j:"absolute",r:"inline",c:100,k:"div",z:"13",d:100},"44":{o:"content-box",h:"t_5.jpg",x:"visible",a:340,q:"100% 100%",b:171,j:"absolute",r:"inline",c:100,k:"div",z:"8",d:100}},backgroundColor:"#FFFFFF",name:"Untitled Scene 3"}];


	
	var javascripts = [{name:"untitledFunction",source:"function(hypeDocument, element, event) {\n\t/*\t\n\t\thypeDocument - access to the hype document API:\n\t\t\t\t\t\tMETHODS:\n\t\t\t\t\t\thypeDocument.documentName()\n\t\t\t\t\t\thypeDocument.sceneNames()\n\t\t\t\t\t\thypeDocument.currentSceneName()\n\t\t\t\t\t\thypeDocument.showSceneNamed(sceneName, optionalTransition)\n\t\t\t\t\t\thypeDocument.showNextScene(optionalTransition)\n\t\t\t\t\t\thypeDocument.showPreviousScene(optionalTransition)\n\t\t\t\t\t\thypeDocument.playTimelineNamed(timelineName)\n\t\t\t\t\t\thypeDocument.getElementById(id)\n\n\t\t\t\t\t\tMORE INFO:\n\t\t\t\t\t\thttp://tumultco.com/hype/documentation/javascript/\n\t\n\t\telement - DOMHTMLElement that triggered this function being called\n\t\tevent - event that triggered this function being called\n\t*/\n\t\n\t\n}",identifier:"13"}];


	
	var Custom = {};
	var javascriptMapping = {};
	for(var i = 0; i < javascripts.length; i++) {
		try {
			javascriptMapping[javascripts[i].identifier] = javascripts[i].name;
			eval("Custom." + javascripts[i].name + " = " + javascripts[i].source);
		} catch (e) {
			hypeDoc.log(e);
			Custom[javascripts[i].name] = (function () {});
		}
	}
	
	hypeDoc.setAttributeTransformerMapping(attributeTransformerMapping);
	hypeDoc.setScenes(scenes);
	hypeDoc.setJavascriptMapping(javascriptMapping);
	hypeDoc.Custom = Custom;
	hypeDoc.setCurrentSceneIndex(0);
	hypeDoc.setMainContentContainerID("slideshow_hype_container");
	hypeDoc.setResourcesFolderName(resourcesFolderName);
	hypeDoc.setShowHypeBuiltWatermark(0);
	hypeDoc.setShowLoadingPage(true);
	hypeDoc.setDrawSceneBackgrounds(true);
	hypeDoc.setDocumentName(documentName);

	HYPE.documents[documentName] = hypeDoc.API;

	hypeDoc.documentLoad(this.body);
}());

