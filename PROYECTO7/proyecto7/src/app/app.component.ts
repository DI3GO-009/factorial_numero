import { Component } from '@angular/core';
import { CommonModule } from '@angular/common';
import { RouterOutlet } from '@angular/router';

@Component({
  selector: 'app-root',
  standalone: true,
  imports: [CommonModule, RouterOutlet],
  templateUrl: './app.component.html',
  styleUrl: './app.component.css'
})
export class AppComponent {
  title = 'proyecto7';

aplicar_sonido(numero:number):void {
 const audio = new Audio();
 audio.src = '../assets/sonidos/note'+ numero +'.wav';
 audio.load();
 audio.play();
}

}

/*
JavaScript 
Tipos de funciones :

var function = () =>{}
function nombre (){}
nombres () {}
()=> {}


Typescript 

nombre:Tipo de Dato
nombre:string



*/

