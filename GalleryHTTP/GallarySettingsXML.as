﻿package {		import flash.display.*;    import flash.net.*;    import flash.events.*;	import flash.text.*;	import flash.utils.*;	    public class GallarySettingsXML extends MovieClip { 		private var LoaderXML:URLLoader;		private var URLReq:URLRequest;		private var info:String;		private var item:XML;		private var Numb:int;				public var isDone:Boolean;				public var theArray:Array;        public function GallarySettingsXML() {			isDone = false;		 	LoaderXML = new URLLoader();			URLReq = new URLRequest("GallarySettings.xml"); // for loader   		    theArray = new Array();			LoaderXML.addEventListener(Event.COMPLETE, Loaded);			LoaderXML.load(URLReq);				}		public function Loaded(event:Event):void{						var myXML:XML = new XML(LoaderXML.data);			//trace(myXML.children()[0].GetPhotosPhpUrl);			//trace(myXML.children()[0].setting2);			//trace(myXML.children()[0].setting3);			trace(myXML.*.length());			//thereIs.text = myXML.children().*.length();						for each(item in myXML.children()[0].*) { // populate 						theArray.push(item);			//trace("the Array" + item);						for(Numb = 0; Numb < theArray.length; Numb++){						}//end of for							}//end of for each						if(myXML.*.length() > 0){				isDone = true;			}								}// end    }///end}