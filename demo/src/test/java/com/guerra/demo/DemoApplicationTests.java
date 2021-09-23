package com.guerra.demo;

import static org.junit.jupiter.api.Assertions.assertTrue;

import org.junit.jupiter.api.Test;
import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.boot.test.context.SpringBootTest;
import org.springframework.security.crypto.bcrypt.BCryptPasswordEncoder;

import com.guerra.model.Usuario;
import com.guerra.repo.IUsuarioRepo;

@SpringBootTest
class DemoApplicationTests {

	
	@Autowired
	private IUsuarioRepo repo;
	
	@Autowired
	private BCryptPasswordEncoder encoder;
	
	
	
	@Test
	public void crearUsuarioTest() {
		
		Usuario u = new Usuario();
		u.setId(5);
		u.setNombre("demo2");
		u.setClave(encoder.encode("123"));
		
		Usuario retorno = repo.save(u);
		
		assertTrue(retorno.getClave().equalsIgnoreCase(u.getClave()));
		
	}

}
