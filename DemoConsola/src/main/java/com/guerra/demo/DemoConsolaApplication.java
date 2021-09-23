package com.guerra.demo;

import org.slf4j.Logger;
import org.slf4j.LoggerFactory;
import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.beans.factory.annotation.Qualifier;
import org.springframework.boot.CommandLineRunner;
import org.springframework.boot.SpringApplication;
import org.springframework.boot.autoconfigure.SpringBootApplication;

import com.guerra.demo.service.IPersonaService;


@SpringBootApplication
public class DemoConsolaApplication implements CommandLineRunner{
	
	@Autowired
	private IPersonaService service;
	
	
	private static final Logger log = LoggerFactory.getLogger(DemoConsolaApplication.class);

	
	public static void main(String[] args) {
		SpringApplication.run(DemoConsolaApplication.class, args);
	}

	@Override	
	public void run(String... args) throws Exception {
		// TODO Auto-generated method stub
		//System.out.println("Hola mundo");
		//log.info("Hola mundo");
		//log.warn("MEnsaje de advertencia");
		service.registrar("Jaasiel");
		
	}

}
