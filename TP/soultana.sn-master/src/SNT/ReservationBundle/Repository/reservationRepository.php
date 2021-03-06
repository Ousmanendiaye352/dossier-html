<?php

namespace SNT\ReservationBundle\Repository;

/**
 * reservationRepository.
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class reservationRepository extends \Doctrine\ORM\EntityRepository
{
    public function findReservation($idReservation = '', $idClient = '', $idBien = '')
    {
        $em = $this->getEntityManager();
        $requete = 'SELECT B.id as Bien_id, P.id as Proprietaire_id, C.id as Client_id, R.id as Reservation_id, B.nomBien, B.balcon, B.meuble, B.adresse, B.prixLoc, B.surface, B.nbreChambre, B.nbreEtage, B.nbreSalon, B.nbreSallebain,B.description, B.parking,
        I.chemin,
        TB.nomTypeBien,
        Q.nomQuartier,
        V.nomVille,
        P.nomComplet,
        C.nomClient, C.numCni as Client_cni, C.adresse as Client_adresse, C.telephone as Client_telephone, C.email as Client_email,
        R.date as Reservation_date
        FROM RESERVATIONBundle:Bien B, RESERVATIONBundle:typeBien TB, RESERVATIONBundle:image I, RESERVATIONBundle:quartier Q, RESERVATIONBundle:ville V, RESERVATIONBundle:reservation R, RESERVATIONBundle:client C, RESERVATIONBundle:proprietaire P
        WHERE B.disponibilite = true AND R.etat = false
        AND B.quartier = Q.id
        AND B.proprietaire = P.id
        AND Q.ville = V.id
        AND B.typeBien = TB.id
        AND I.idBien = B.id
        AND R.bien = B.id
        AND R.client = C.id';

        if ($idReservation != null) {
            $requete .= ' AND R.id = :idReservation';
        }

        if ($idClient != null) {
            $requete .= ' AND C.id = :idClient';
        }

        if ($idBien != null) {
            $requete .= ' AND B.id = :idBien';
        }

        $query = $em->createQuery($requete);

        if ($idReservation != null) {
            $query->setParameter('idReservation', $idReservation);
        }

        if ($idClient != null) {
            $query->setParameter('idClient', $idClient);
        }

        if ($idBien != null) {
            $query->setParameter('idBien', $idBien);
        }

        $resultat = $query->getResult();

        if ($resultat == '') {
        } else {
            return $resultat;
        }
    }
}
