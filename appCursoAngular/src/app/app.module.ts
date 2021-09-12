import { NgModule } from '@angular/core';
import { BrowserModule } from '@angular/platform-browser';
import { FechaactualComponent } from "./fechaactual/fechaactual.component";

import { AppComponent } from './app.component';
import { CopyrightComponent } from './copyright/copyright.component';
import { ViewmodelComponent } from './viewmodel/viewmodel.component';
import { EjmetodoComponent } from './ejmetodo/ejmetodo.component';

@NgModule({
  declarations: [
    AppComponent,
    FechaactualComponent,
    CopyrightComponent,
    ViewmodelComponent,
    EjmetodoComponent
  ],
  imports: [
    BrowserModule
  ],
  providers: [],
  bootstrap: [AppComponent]
})
export class AppModule { }
