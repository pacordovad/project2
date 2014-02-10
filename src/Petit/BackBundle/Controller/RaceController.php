<?php

namespace Petit\BackBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Petit\BackBundle\Entity\Race;
use Petit\BackBundle\Form\RaceType;


/**
 * Race controller.
 *
 */
class RaceController extends Controller
{

    /**
     * Lists all Race entities.
     *
     */
    public function indexAction()
    {        
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('PetitBackBundle:Race')->findAll();

        return $this->render('PetitBackBundle:Race:index.html.twig', array(
            'entities' => $entities,
        ));
    }
    /**
     * Creates a new Race entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity = new Race();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity->setCreatedAt(new \DateTime());
            $entity->setUpdatedAt(new \DateTime());
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('raza', array()));
            //return $this->redirect($this->generateUrl('raza_show', array('id' => $entity->getId())));
        }

        return $this->render('PetitBackBundle:Race:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
    * Creates a form to create a Race entity.
    *
    * @param Race $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createCreateForm(Race $entity)
    {
        $form = $this->createForm(new RaceType(), $entity, array(
            'action' => $this->generateUrl('raza_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Crear','attr'=>array('class'=>"btn btn-sm btn-success")));

        return $form;
    }

    /**
     * Displays a form to create a new Race entity.
     *
     */
    public function newAction()
    {
        $entity = new Race();
        $form   = $this->createCreateForm($entity);

        return $this->render('PetitBackBundle:Race:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Race entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('PetitBackBundle:Race')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Race entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('PetitBackBundle:Race:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),        ));
    }

    /**
     * Displays a form to edit an existing Race entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('PetitBackBundle:Race')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Race entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('PetitBackBundle:Race:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
    * Creates a form to edit a Race entity.
    *
    * @param Race $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(Race $entity)
    {
        $form = $this->createForm(new RaceType(), $entity, array(
            'action' => $this->generateUrl('raza_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Actualizar','attr'=>array('class'=>"btn btn-success")));

        return $form;
    }
    /**
     * Edits an existing Race entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('PetitBackBundle:Race')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Race entity.');
        }
        $entity->setUpdatedAt(new \DateTime());
        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            
            $em->flush();

            return $this->redirect($this->generateUrl('raza_edit', array('id' => $id)));
        }

        return $this->render('PetitBackBundle:Race:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Deletes a Race entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('PetitBackBundle:Race')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Race entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('raza'));
    }

    /**
     * Creates a form to delete a Race entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('raza_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
}
