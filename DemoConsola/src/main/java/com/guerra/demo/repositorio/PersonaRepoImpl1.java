package com.guerra.demo.repositorio;

import org.slf4j.Logger;
import org.slf4j.LoggerFactory;
import org.springframework.beans.factory.annotation.Qualifier;
import org.springframework.stereotype.Repository;

import com.guerra.demo.DemoConsolaApplication;

@Repository
@Qualifier("persona1")
public class PersonaRepoImpl1 implements IPersonaRepo {

	private static final Logger log = LoggerFactory.getLogger(DemoConsolaApplication.class);

	@Override
	public void registrar(String nombre) {
		// TODO Auto-generated method stub
		log.info("Se registro a:  	" + nombre);
	}

}
