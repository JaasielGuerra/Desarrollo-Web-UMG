import { Component, OnInit } from '@angular/core';
import {Alumno} from '../models/alumno.model';


@Component({
  selector: 'app-viewmodel',
  templateUrl: './viewmodel.component.html',
  styleUrls: ['./viewmodel.component.css'],
})
export class ViewmodelComponent implements OnInit {
  constructor() {}

  ngOnInit(): void {}

  alumno1 = new Alumno(1, 'Jaasiel', 'Guerra', 'Gualan');
}
