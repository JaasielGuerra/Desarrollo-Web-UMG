package com.guerra.repo;

import org.springframework.data.jpa.repository.JpaRepository;

import com.guerra.model.Persona;
import com.guerra.model.Usuario;

public interface IUsuarioRepo extends JpaRepository<Usuario, Integer>{

	//findBy es una palabra reservada en Spring Boot, luego de eso va el nombre de la columna
	public Usuario findByNombre(String nombre);
	
}
