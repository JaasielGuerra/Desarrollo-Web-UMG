package com.guerra.repo;

import org.springframework.data.jpa.repository.JpaRepository;

import com.guerra.model.Persona;

public interface IPersonaRepo extends JpaRepository<Persona, Integer>{

}
