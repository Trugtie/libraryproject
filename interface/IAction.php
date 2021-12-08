<?php

interface IAction{
    public  function getAll();
    public  function getById($id);
    public  function add($object);
    public  function update($object);
    public  function delete($id);
}